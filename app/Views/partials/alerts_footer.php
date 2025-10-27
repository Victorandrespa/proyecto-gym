<?php $alert = session()->getFlashdata('alert'); ?>
<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
// ------- DIAGNÓSTICO -------
console.log('[alerts] footer incluido');
console.log('[alerts] window.Swal existe?', !!window.Swal);

// Mostrar flashdata si existe (no es el foco ahorita, pero lo dejamos)
window.__FLASH_ALERT__ = <?= json_encode($alert ?? null) ?>;
(function(){
  const a = window.__FLASH_ALERT__;
  if (!a) return;
  if (a.mode === 'toast') {
    const Toast = Swal.mixin({toast:true,position:'top-end',showConfirmButton:false,timer:2300,timerProgressBar:true});
    Toast.fire({icon:a.type||'success', title:a.title||'', text:a.text||''});
  } else {
    Swal.fire({icon:a.type||'info', title:a.title||'', text:a.text||'', confirmButtonText:a.confirmText||'Ok'});
  }
})();

// ------- LISTENER ROBUSTO -------
window.addEventListener('DOMContentLoaded', () => {
  console.log('[alerts] DOMContentLoaded');
  document.body.addEventListener('click', async (e) => {
    const raw = e.target;
    const btn = raw.closest('[data-confirm]');
    if (!btn) return;
    console.log('[alerts] click detectado en', raw, '-> objetivo', btn);

    e.preventDefault();
    const title = btn.getAttribute('data-confirm-title') || '¿Confirmar acción?';
    const text  = btn.getAttribute('data-confirm-text')  || 'Esta acción no se puede deshacer.';
    const icon  = btn.getAttribute('data-confirm-icon')  || 'warning';
    const okTxt = btn.getAttribute('data-confirm-ok')    || 'Sí';
    const noTxt = btn.getAttribute('data-confirm-cancel')|| 'No';

    const result = await Swal.fire({
      title, text, icon,
      showCancelButton: true,
      confirmButtonText: okTxt,
      cancelButtonText:  noTxt,
      reverseButtons: true,
      focusCancel: true
    });
    console.log('[alerts] resultado modal:', result);

    if (!result.isConfirmed) return;

    const method = (btn.getAttribute('data-method') || 'link').toLowerCase();
    if (method === 'form') {
      const form = btn.closest('form');
      console.log('[alerts] enviando form?', !!form);
      if (form) form.submit();
    } else {
      const href = btn.getAttribute('href');
      console.log('[alerts] navegando a', href);
      if (href) window.location.href = href;
    }
  });
});
</script>
