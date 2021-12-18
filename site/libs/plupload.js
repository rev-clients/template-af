$(function () {
  // Setup html5 version
  $("#uploader").pluploadQueue({
    // General settings
    runtimes: "html5,flash,silverlight,html4",
    url: "../upload.php",
    chunk_size: "1mb",
    rename: true,
    dragdrop: true,

    filters: {
      // Maximum file size
      max_file_size: "10mb",
      // Specify what files to browse for
      mime_types: [
        { title: "Image files", extensions: "jpg,gif,png" },
        { title: "Zip files", extensions: "zip" },
      ],
    },

    // Resize images on clientside if we can
    resize: { width: 320, height: 240, quality: 90 },

    flash_swf_url: "../../js/Moxie.swf",
    silverlight_xap_url: "../../js/Moxie.xap",
  });
});
