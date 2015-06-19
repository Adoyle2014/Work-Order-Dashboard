<?php include('core/init.php'); ?>
  <h3>Add Vendor</h3>
  <form id="addVendor"  data-module-id="vendors" action="#" method="post">
    <div class="row">
      <div class="large-6 columns">
        <div class="row">
          <div class="large-12 columns">
            <label>Business Name
              <input name="business_name" type="text" placeholder="Enter Business Name"/>
            </label>
          </div>
        </div>
        <div class="row">
          <div class="large-12 columns">
            <label>Business Phone
              <input name="business_phone" type="text" placeholder="Enter Business Phone Number"/>
            </label>
          </div>
        </div> 
        <div class="row">
          <div class="large-12 columns">
            <label>Address 1
              <input name="address1" type="text" placeholder="Enter Address"/>
            </label>
          </div>
        </div>
        <div class="row">
          <div class="large-12 columns">
            <label>Address 2
              <input name="address2" type="text" placeholder="Enter Address"/>
            </label>
          </div>
        </div>
        <div class="row">
          <div class="large-12 columns end">
            <label>City
              <input name="city" type="text" placeholder="Enter City"/>
            </label>
          </div>
        </div>
        <div class="row">
          <div class="large-12 columns">
            <label>State
              <select name="state">
                <option>Select State</option>
                <?php foreach($states as $key => $value) : ?>
                  <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                <?php endforeach; ?>
              </select>
            </label>
          </div>
        </div>
        <div class="row">
          <div class="large-12 columns">                
            <label>Zipcode
              <input name="zip" type="text" placeholder="Enter zipcode">
            </label>
          </div>
        </div>
      </div>                
      <div class="large-6 columns">
        <div class="row">
          <div class="large-12 columns">
            <label>Contact Name
              <input name="contact_name" type="text" placeholder="Enter Contact Name"/>
            </label>
          </div>
        </div>
        <div class="row">
          <div class="large-12 columns">
            <label>Contact Phone
              <input name="contact_phone" type="text" placeholder="Enter Contact Phone Number"/>
            </label>
          </div>                                     
        </div>
        <div class="row">
          <div class="large-12 columns">
              <label>Contact Email
                <input name="contact_email" type="email" placeholder="Enter Contact Email"/>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label>Notes
                <textarea name="notes" placeholder="Enter Optional Notes" rows="13"></textarea>
              </label>
            </div>
          </div>
        </div>
      </div>                                                                           
      <input type="submit" class="save-btn button right small" value="Save"/>
     <a class="close-reveal-modal">&#215;</a><!--Close Button-->
    </form>      
  <script>
    $(document).foundation();
  </script>