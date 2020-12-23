<!-- Button trigger modal
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detmodal">
  Launch demo modal
</button> -->
<?php 


echo '<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<div class="modal fade" id="detmodal" tabindex="-1" aria-labelledby="detmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detmodalLabel">Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST">
      <div class="mb-3">
    <label for="exampleInputname" class="form-label"><b>Name :- </b></label>
    '.$fetch['firstname'] .' '. $fetch['lastname'] .'
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPack" class="form-label"><b>Pack Selected :- </b></label>
    '. $fetch['pack'] .'
  </div>
  

    <div class="mb-3">
    <label for="exampleInputemail" class="form-label"><b>Email :- </b></label>
    '. $fetch['email'] .'
  </div>

  <div class="mb-3">
    <label for="exampleInputPhone" class="form-label"><b>Contact No. :- </b></label>
    '. $fetch['phone'] .'
  </div>

  <div class="mb-3">
  <label for="exampleInputPhone" class="form-label"><b>Address :- </b></label>
  '. $fetch['address'] .'
  
</div>

  <div class="text-center">
  
  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
  
  </div>
</form>
      </div>
      
    </div>
  </div>
</div>';

?>