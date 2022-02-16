jQuery(document).ready(function ($) {
 
   $(document).on("click", ".upload_gallery_button", function (e) {
      e.preventDefault();
      var $button = $(this);
 
 
      // Create the media frame.
      var file_frame = wp.media.frames.file_frame = wp.media({
         title: 'Выбрать или загрузить изображение',
         library: { // remove these to show all
            type: 'image' // specific mime
         },
         button: {
            text: 'Выбрать'
         },
         multiple: true  // Set to true to allow multiple files to be selected
      });
 
      // When an image is selected, run a callback.
      file_frame.on('select', function () {
         // We set multiple to false so only get one image from the uploader
 
         var attachment = file_frame.state().get('selection').first().toJSON();
 
         $button.siblings('input').val(attachment.url);
 
      });
 
      // Finally, open the modal
      file_frame.open();
   });
});