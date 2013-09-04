-- SUMMARY --

The AddThis Field module provides Drupal integration with the addthis.com link sharing service. Integration has been implemented as a Drupal field type.

-- REQUIREMENTS --

Field, Field UI, Field SQL storage

-- INSTALLATION --

Extract the package into your 'sites/all/modules' directory.
Enable the Addthis Field module. Go to "/admin/modules" and put a checkmark in the 'Enabled' column next to 'Addthis Field' and press the button to save.

-- USAGE --

Configure content types. Go to 'Administration/Structure/Content types' and click 'manage fields' link of a chosen content type (for example Article). While adding a new field select the 'Addthis share buttons' option from the dropdown list under the 'Field Type' label. Save the changes. Go to the 'manage display' link of the chosen content type, locate the added field and select the value '<Hidden>' from the 'Label' dropdown list. Save the changes. 

Now if you create a new node of the chosen content type it will have an Addthis field included.

To change HTML or CSS of an Addthis field edit "addthisfield.tpl.php" and "addthisfield.css" files accordingly.