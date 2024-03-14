<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Advertisement</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


  
<div class="container">
  <div class="row">
      <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
        <h4>Add Advertisement</h4>
        <hr>
        <form action="register-add" method="post" enctype="multipart/form-data">
         
          @csrf
             <div class="form-group">
                 <label for="title">Title</label>
                 <input type="text" class="form-control" placeholder="Enter Title" name="title" value="">
                 
             </div>

             <div class="form-group">
                 <label for="description">Description</label>
                 <input type="text" class="form-control" placeholder="Enter Description" name="description" value="">
                
             </div>

            

             <div class="form-group">
          <label for="profile_picture">Image:</label>
          <input type="file" name="profile_picture" id="profile_picture">
         </div>


         <div class="form-group">
          <label for="start_date">Start Date:</label>
         <input type="date" id="start_date" name="start_date">
         </div>

         <div class="form-group">
          <label for="end_date">End Date:</label>
         <input type="date" id="end_date" name="end_date">
         </div>


             <div class="form-group">
                 <button class="btn btn-block btn-primary" type="submit">
                     ADD ADVERTISEMNT
                            
                 </button>
             </div>
             <br>
            
        </form>
      </div>
  </div>
</div>

</body>
</html>
