<?php if ( $this -> session -> flashdata ('payment_success')) : ?>
<script>
    Swal.fire({
        title: 'Başarılı!',
        text: 'Siparişiniz başarıyla tamamlandı!',
        icon: 'success',
        confirmButtonText: 'Kapat.'
    });
</script>
<?php elseif ( $this -> session -> flashdata ('paymet_error')) : ?>
<script>
    Swal.fire({
        title: 'Hata!',
        text: "<?=$this -> session -> flashdata ('paymet_error');?>",
        icon: 'error',
        confirmButtonText: 'Kapat.'
    });
</script>
<?php endif; ?>