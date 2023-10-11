<!DOCTYPE html>
<html>
<head>
	<title>Image Upload Using PHP</title>
	<link rel="stylesheet" href="./css/upload.css" />
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
	</style>
</head>
<body>
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <!-- <form action="upload.php"
           method="post"
           enctype="multipart/form-data">

           <input type="file" 
                  name="my_image">

           <input type="submit" 
                  name="submit"
                  value="Upload">
     	
     </form> -->
	 <div class="container"><!--Container-->
  
  <div class="form">
      <br>
      <h1 class="mb-3 forest-text text-center"><i class="far fa-calendar-alt"></i></h1> 
      <form action="upload.php" method="POST" enctype="multipart/form-data">
        <h1 class="h3 mb-4 font-weight-normal forest-text text-center">Uploading a New Place</h1>
      <div class="form-group">
          <label for="name">Place Name:</label>
          <input class="form-control" type="text" name="name" placeholder="Enter Place Name" required autofocus>
      </div>
	  </br>
      <label for="my_image">Upload an Image:</label>
      <div class="input-group">
          <div class="input-group-prepend mb-3">
              <span class="input-group-text"></span>
          </div>
          <div class="custom-file">
              <input type="file" id="image" name="my_image" accept="image/*" required>
              <label class="custom-file-label" for="my_image">Choose image</label>
          </div>
      </div>
      <!-- <div class="form-group">
          <label for="date">Date of event:</label>
          <input class="form-control" type="text" name="date" placeholder="date" required>
      </div>
      <div class="form-group">
          <label for="time">Time of event:</label>
          <input class="form-control" type="text" name="time" placeholder="time" required>
      </div>
      <div class="form-group">
          <label for="description">Description: (optional)</label>
          <textarea class="form-control" rows="5" type="text" name="description" placeholder="description"></textarea>
      </div>-->
	</br>
      <div class="form-group">
	  <input type="submit" 
                  name="submit"
                  value="Upload">
      </div>
      </form>
  </div>
</div>
</body>
</html>