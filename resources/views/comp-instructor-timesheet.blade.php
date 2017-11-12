@include('includes.head', array('cssFolder' => 'comp.instructor-timesheet'))
<body>
@include('includes.header', array('subdomain'=>'companyinstructor'))

<!--Custom theme slider-->
<div class="form-register">
  <div class="container-fluid">
      
        <h2>timesheet</h2>

          <div class="fillin">
            <form class="form-horizontal">
              <div class="form-group">
               

                
                <div class="form-group">
                  <label for="skills" class="col-sm-2 control-label">Attachments</label>
                  <input id="input-folder-2" name="input-folder-2[]" class="file-loading" type="file" multiple webkitdirectory accept="image/*">
                  <div id="errorBlock" class="help-block"></div>
                  <script>
                  $(document).on('ready', function() {
                      $("#input-folder-2").fileinput({
                          browseLabel: 'Select Folder...',
                          previewFileIcon: '<i class="fa fa-file"></i>',
                          allowedPreviewTypes: null, // set to empty, null or false to disable preview for all types
                          previewFileIconSettings: {
                              'xls': '<i class="fa fa-file-excel-o text-success"></i>',
                              'zip': '<i class="fa fa-file-archive-o text-muted"></i>',
                          },
                          previewFileExtSettings: {
                              'xls': function(ext) {
                                return ext.match(/(xls|xlsx)$/i);
                              },
                              'zip': function(ext) {
                                  return ext.match(/(zip|rar|tar|gzip|gz|7z)$/i);
                              },
                                                        }
                      });
                  });
                  </script>
                  </div>

                <div class="form-group">
                  <div class="text-center">
                    <button type="submit" class="btn btn-default">Submit</button><button type="cancel" class="btn btn-default">Cancel</button>
                  </div>

                 


                </div>
              </form>

     
      </div> 
      <!-- end-of-fillin -->

      
    </div>
</div>
<!-- end-of-form-register -->

@include('includes.footer')


</body>
