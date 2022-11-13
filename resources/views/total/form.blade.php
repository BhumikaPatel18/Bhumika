<div class="form-group">
    <label for="firstname">FirstName</label>
    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter  First Name" >
</div>

<div class="form-group">
    <label for="lastname">lastName</label>
    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter last First Name" >
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" name="description" id="description" rows="2"></textarea>
</div>

<div class="form-group">
    <label for="hobby">Hobby : </label>
       <div class="form-check form-check-inline">
           <label class="form-check-label">
               <input class="form-check-input" type="checkbox" name="hobbies[]" id="cricket"  value="cricket" {{ $total->hobby ?? '' }}> Cricket
           </label>
       </div>

       <div class="form-check form-check-inline">
           <label class="form-check-label">
               <input class="form-check-input" type="checkbox" name="hobbies[]" id="travelling" value="travelling" {{ $total->hobby ?? '' }}> Travelling
           </label>
       </div>

       <div class="form-check form-check-inline">
           <label class="form-check-label">
               <input class="form-check-input" type="checkbox" name="hobbies[]" id="reading" value="reading" {{ $student->hobby ?? '' }}> Reading
           </label>
       </div>
   </div>

   <div class="form-group">
     <label for="price">Price</label>
     <input type="text" name="price" id="price" class="form-control" placeholder="price" >
   </div>

   <div class="form-group">
     <label for="quantity">Quantity</label>
     <input type="text" name="quantity" id="quantity" class="form-control" placeholder="quantity" >
   </div>

   <div class="form-group">
     <label for="producttype">producttype</label>
     <select class="form-control" name="producttype" id="producttype">
       <option>select product</option>
       <option>phone</option>
       <option>television</option>
       <option>clothes</option>
     </select>
   </div>
<br>
