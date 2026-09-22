<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Presciption Details</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style type="text/css">
  #Iframe-Master-CC-and-Rs {
    max-width: 100%;
    max-height: 1200px; 
    overflow: hidden;
  }

  /* inner wrapper: make responsive */
  .responsive-wrapper {
    position: relative;
    height: 0;    /* gets height from padding-bottom */ 
  }

  .responsive-wrapper iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;

    margin: 0;
    padding: 0;
    border: none;
  }

  /* padding-bottom = h/w as % -- sets aspect ratio */
  /* YouTube video aspect ratio */
  .responsive-wrapper-wxh-572x612 {
    padding-bottom: 107%;
  }

  /* general styles */
  /* ============== */
  .set-border {
    border: 5px inset #4f4f4f;
  }
  .set-box-shadow { 
    -webkit-box-shadow: 4px 4px 14px #4f4f4f;
    -moz-box-shadow: 4px 4px 14px #4f4f4f;
    box-shadow: 4px 4px 14px #4f4f4f;
  }
  .set-padding {
    padding: 40px;
  }
  .set-margin {
    margin: 30px;
  }
  .center-block-horiz {
    margin-left: auto !important;
    margin-right: auto !important;
  }
</style>
</head>
<body>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3>Name: {{$value->name}}</h3>
            <h3>Mobile No: {{$value->mobile}}</h3>
            <h3>Description: {{$value->description}}</h3>
          </div>
          <div class="col-md-12">
            <div id="Iframe-Master-CC-and-Rs" class="set-margin set-padding set-border set-box-shadow center-block-horiz">
              <div class="responsive-wrapper 
              responsive-wrapper-wxh-572x612"
              style="-webkit-overflow-scrolling: touch; overflow: auto;">
              <iframe id="showImage" src="{{@$value->image ? url('public/upload/patient_files/'.$value->image) : url('public/upload/no_image.png')}}"> 
              </iframe>
            </div>
          </div>
        </div>
      </div>
</body>
</html>