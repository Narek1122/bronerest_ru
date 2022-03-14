<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

  <style>
    #gallery { float: left; width: 65%; min-height: 12em; }
    .gallery.custom-state-active { background: #eee; }
    .gallery li { float: left; width: 96px; padding: 0.4em; margin: 0 0.4em 0.4em 0; text-align: center; }
    .gallery li h5 { margin: 0 0 0.4em; cursor: move; }
    .gallery li a { float: right; }
    .gallery li a.ui-icon-zoomin { float: left; }
    .gallery li img { width: 100%; cursor: move; }

    #trash { float: right; width: 32%; min-height: 18em; padding: 1%; }
    #trash h4 { line-height: 16px; margin: 0 0 0.4em; }
    #trash h4 .ui-icon { float: left; }
    #trash .gallery h5 { display: none; }

    .tbl-div, .ddd{
      width: 400px;
      height: 400px;
      border: 1px solid;
      float: left;
    }
    .some-td{
      width: 70px;
      height: 70px;
      border: 1px solid brown
    }
    #gallery div{
      width: 50px;
      height: 50px;

    }
    td>div{
      height:100%
    }
    </style>
</head>
<body>
    <section>
<input type="text" class="inp">
<button class="create">create</button>
<div class="tbl-div">
  <table id="m" class="tbl">
    {{-- <tr><td class="some-td"></td></tr> --}}

  </table>
</div>
<section id="gallery" class="gallery ui-helper-reset ui-helper-clearfix">
  <div class="ui-widget-content ui-corner-tr">bb</div>
  <div class="ui-widget-content ui-corner-tr">cc</div>
  <div class="ui-widget-content ui-corner-tr">dd</div>
  <div class="ui-widget-content ui-corner-tr">ee</div>

</section>
<div class="floor-image">
  <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
  <label for="imageUpload">Upload image</label>
</div>


    </section>


    <script>

        $( function() {
          function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('.tbl-div').css({'background':'url('+e.target.result +')', 'background-size': 'cover'});
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
// ------------------------------------------------
          $('.create').click(function(){
            $('.tbl').html('')
            $inp=$('.inp').val()
            for (let i= 0; i< $inp; i++) {
             $bb= jQuery('<tr/>', {
    id: 'id-'+i,
    "class": 'some-class',
}).appendTo('.tbl');
for (let j= 0; j< $inp; j++) {
  jQuery('<td/>', {
    id: 'd-'+i+'-'+j,
    width: 400/$inp-4+'px',
      height: 400/$inp-4+'px',
    "class": 'some-td ui-droppable ',
}).appendTo($bb);
}
            }
            var $gallery = $( "#gallery" ),
            $trash = $( ".trash" );
            $m=$('#m>tr>td')

          // Let the gallery items be draggable
          $( "div", $gallery ).draggable({
            // cancel: "a.ui-icon", // clicking an icon won't initiate dragging
            revert: "invalid", // when not dropped, the item will revert back to its initial position
      containment: "document",
      helper: "clone",
      cursor: "move"
          });


          $('.some-td').droppable({
      accept: "#gallery > div",
      classes: {
        "ui-droppable-active": "ui-state-highlight"
      },
      drop: function( event, ui ) {
        // deleteImage( ui.draggable );
        $l=event.target
        console.log($l)
        $(event.target).html(ui.draggable.clone())
      }
    });
          })


        } );
        </script>
</body>
</html>
