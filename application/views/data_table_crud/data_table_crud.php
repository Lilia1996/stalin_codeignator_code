<style type="text/css">
            #form-holder {        
                width:100%;
                display:block;
                display: none;
            }
            #form-holder {
                border-radius: 7px;
                background:#6b6a63;
                margin:30px auto 0;
                padding:6px;
                position:absolute;
                width:600px;
                top: 50%;
                left: 50%;
                margin-left: -300px; /* 1/2 width*/
                margin-top: -40px; /* 1/2 height*/
            }
        </style>
<button id="add-button">Add New Contact</button>
			<table id="contact" class="display table" cellspacing="0" width="100%">
			<thead>
			<tr>
			<th>Contact ID</th>
			<th>Contact Name</th>
			<th>Contact Address</th>
			<th>Contact Phone</th>
			<th>Actions</th>
			</tr>
			</thead>
			<tfoot>
			<tr>
			<th>Contact ID</th>
			<th>Contact Name</th>
			<th>Contact Address</th>
			<th>Contact Phone</th>
			<th>Actions</th>
			</tr>
			</tfoot>
			<tbody>
			<?php
			foreach ($contacts as $contact) {
				echo '<tr>';
				echo '<td>' . $contact->contact_id . '</td>';
				echo '<td>' . $contact->contact_name . '</td>';
				echo '<td>' . $contact->contact_address . '</td>';
				echo '<td>' . $contact->contact_phone . '</td>';
				echo '<td><button class="edit-button" id="' . $contact->contact_id . '">Edit</button>&nbsp;<button class="delete-button" id="' . $contact->contact_id . '">Delete</button></td>';
				echo '</tr>';
			}
			?>
            </tbody>
        </table>

        <div id="form-holder">
            <div id="dialog-form" title="Add New Contact">
                <p>
                    All form fields are required.  
                </p>
                <form id="contact-form">  
                    <fieldset>
                        <label for="contact_name">  
                            Contact Name
                        </label>  
                        <input type="text" name="contact_name" id="contact_name" value="" /><br/> 
                        <label for="Productdesc">  
                            Contact Address
                        </label>  
                        <textarea name="contact_address" id="contact_address"></textarea><br/>
                        <label for="Price">  
                            Contact Phone  
                        </label>  
                        <input type="text" name="contact_phone" id="contact_phone" value="" />
                        <br/>
                        <input type="submit" id="add-contact" value="Add Contact" />
                        &nbsp;
                        <button id="close-button">Close</button>
                    </fieldset>  
                </form>  
            </div>
        </div>
