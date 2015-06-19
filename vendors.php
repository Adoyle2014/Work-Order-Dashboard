<?php include('core/init.php'); ?>

<?php
//Create DB object
$db = new Database;

//Run Query
$db->query("SELECT * FROM `vendors`");

//Assign result set
$vendors = $db->resultset();

?>
<div class="row">
      <div class="large-12 columns">
        <table>
          <thead>
            <tr>
              <th width="300">Business</th>
              <th width="200">Contact Name</th>
              <th width="25">Contact Phone</th>
              <th width="100">Email</th>
              <th width="250">Address</th>              
              <th width="200">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($vendors as $vendor) : ?>
            <tr>
              <td><?php echo $vendor->business_name; ?></a></td>
              <td><?php echo $vendor->contact_name; ?></td>
              <td><?php echo $vendor->contact_phone; ?></td>
              <td><?php echo $vendor->contact_email; ?></td>
              <td>
                <ul>
                  <li><?php echo $vendor->address1; ?></li>
                  <li><?php if($vendor->address2) echo $vendor->address2; ?></li>
                  <li><?php echo $vendor->city.', '.$vendor->state.' '.$vendor->zip; ?></li>
                </ul>
              </td>              
              <td>
                <ul class="button-group">
                  <li>
                    <a href="#" class="button tiny view-edit-btn" data-reveal-id="editModal<?php echo $vendor->id; ?>" data-contact-id="<?php echo $vendor->id; ?>">View/Edit</a>
                      <div id="editModal<?php echo $vendor->id; ?>" class="reveal-modal editModal" data-reveal>
                        <h3>View/Edit vendors</h3>
                        <form id="editVendor"  data-module-id="vendors" action="#" method="post">
                          <div class="row">
                            <div class="large-6 columns">
                              <div class="row">
                                <div class="large-12 columns">
                                  <label>Business Name
                                    <input name="business_name" type="text" placeholder="Enter Business Name" value="<?php echo $vendor->business_name; ?>"/>
                                  </label>
                                </div>
                              </div>
                              <div class="row">
                                <div class="large-12 columns">
                                  <label>Business Phone
                                    <input name="business_phone" type="text" placeholder="Enter Business Phone Number"  value="<?php echo $vendor->business_phone; ?>"/>
                                  </label>
                                </div>
                              </div> 
                              <div class="row">
                                <div class="large-12 columns">
                                  <label>Address 1
                                    <input name="address1" type="text" placeholder="Enter Address"  value="<?php echo $vendor->address1; ?>"/>
                                  </label>
                                </div>
                              </div>
                              <div class="row">
                                <div class="large-12 columns">
                                  <label>Address 2
                                    <input name="address2" type="text" placeholder="Enter Address"  value="<?php echo $vendor->address2; ?>"/>
                                  </label>
                                </div>
                              </div>
                              <div class="row">
                                <div class="large-12 columns end">
                                  <label>City
                                    <input name="city" type="text" placeholder="Enter City"  value="<?php echo $vendor->city; ?>"/>
                                  </label>
                                </div>
                              </div>
                              <div class="row">
                                <div class="large-12 columns">
                                  <label>State
                                    <select name="state">
                                      <?php foreach($states as $key => $value) : ?>
                                        <?php if($key == $vendor->state) {
                                          $selected = 'selected';
                                            } else {
                                            $selected = '';
                                          }
                                        ?>
                                        <option value="<?php echo $key; ?>" <?php echo $selected; ?>><?php echo $value; ?></option>
                                      <?php endforeach; ?>
                                    </select>
                                  </label>
                                </div>
                              </div>
                              <div class="row">
                                <div class="large-12 columns">                
                                  <label>Zipcode
                                    <input name="zip" type="text" placeholder="Enter zipcode"  value="<?php echo $vendor->zip; ?>">
                                  </label>
                                </div>
                              </div>
                            </div>                
                            <div class="large-6 columns">
                              <div class="row">
                                <div class="large-12 columns">
                                  <label>Contact Name
                                    <input name="contact_name" type="text" placeholder="Enter Contact Name" value="<?php echo $vendor->contact_name; ?>"/>
                                  </label>
                                </div>
                              </div>
                              <div class="row">
                                <div class="large-12 columns">
                                  <label>Contact Phone
                                    <input name="contact_phone" type="text" placeholder="Enter Contact Phone Number" value="<?php echo $vendor->contact_phone; ?>"/>
                                  </label>
                                </div>                                     
                              </div>
                              <div class="row">
                                <div class="large-12 columns">
                                    <label>Contact Email
                                      <input name="contact_email" type="email" placeholder="Enter Contact Email" value="<?php echo $vendor->contact_email; ?>" />
                                    </label>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="large-12 columns">
                                    <label>Notes
                                      <textarea name="notes" placeholder="Enter Optional Notes" value="<?php echo $vendor->notes; ?>" rows="13"></textarea>
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </div>                            
                            <input type="hidden" name="id" value="<?php echo $vendor->id; ?>" />                   
                            <input type="submit" class="save-btn button right small" value="Save"/>
                           <a class="close-reveal-modal">&#215;</a><!--Close Button-->
                          </form>
                        </div><!--Modal-->
                      </li>
                      <a href="#" class="button tiny delete-btn" data-reveal-id="deleteModal<?php echo $vendor->id; ?>" data-contact-id="<?php echo $vendor->id; ?>">Delete</a>
                        <div id="deleteModal<?php echo $vendor->id; ?>" data-cid="<?php echo $vendor->id; ?>" class="reveal-modal editModal" data-reveal>
                          <h3>Delete Vendor</h3>
                          <form id="deleteVendor" action="#" method="post">
                            <div class="row">
                              <div class="large-12 columns">
                                <p class="deleteText">Do you really want to delete the vendor <?php echo $vendor->business_name; ?>?</p>
                              </div>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $vendor->id; ?>" />                   
                            <input type="submit" class="delete-btn button right small" value="Delete">
                            <a class="close-reveal-modal">&#215;</a><!--Close Button-->
                          </form>
                        </div><!--Modal-->
                    </ul>
                  </td>
                </tr>   
                <?php endforeach; ?>       
              </tbody>
            </table>
          </div>
        </div>

        <script>
          $(document).foundation();
        </script>