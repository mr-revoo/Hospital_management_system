<div class="modal fade" id="usermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Doctor's data </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <form action="add.php" id="addform" method="POST">

                <div class="form-group">
                <label for="Nameinput">Name:</label>
                <input type="text" class="form-control" id="Nameinput" required="required"placeholder="Enter Doc's Name"name="name" autocomplete=off>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="required"placeholder="Enter Doc's Email"name="email"autocomplete=off>
            </div>
            <label for="main">Specialization</label>
            <select class="form-control my-1" name="selection">
            
                <option>General</option>
                <option >Cardio</option>
                <option>Neuro</option>
                <option >Dental</option>
            </select>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control my--2" id="exampleInputPassword1"required="required"placeholder="Enter Doc's Pass" name="pass">
            </div>
            <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Save</button>

        <input type="hidden" name="action" value="adduser">
        <input type="hidden" name="usrid"  id="usrid" value="">

      </div>
            
            
            </form>
      </div>
      
    </div>
  </div>
</div>

