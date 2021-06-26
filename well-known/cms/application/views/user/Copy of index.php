      <!-- BEGIN PAGE -->
      <div class="page-content">
        
          
         <!-- BEGIN STYLE CUSTOMIZER -->
         <div class="theme-panel hidden-xs hidden-sm">
            <div class="toggler"></div>
            <div class="toggler-close"></div>
            <div class="theme-options">
               <div class="theme-option theme-colors clearfix">
                  <span>THEME COLOR</span>
                  <ul>
                     <li class="color-black current color-default" data-style="default"></li>
                     <li class="color-blue" data-style="blue"></li>
                     <li class="color-brown" data-style="brown"></li>
                     <li class="color-purple" data-style="purple"></li>
                     <li class="color-grey" data-style="grey"></li>
                     <li class="color-white color-light" data-style="light"></li>
                  </ul>
               </div>
               <div class="theme-option">
                  <span>Layout</span>
                  <select class="layout-option form-control input-small">
                     <option value="fluid" selected="selected">Fluid</option>
                     <option value="boxed">Boxed</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>Header</span>
                  <select class="header-option form-control input-small">
                     <option value="fixed" selected="selected">Fixed</option>
                     <option value="default">Default</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>Sidebar</span>
                  <select class="sidebar-option form-control input-small">
                     <option value="fixed">Fixed</option>
                     <option value="default" selected="selected">Default</option>
                  </select>
               </div>
               <div class="theme-option">
                  <span>Footer</span>
                  <select class="footer-option form-control input-small">
                     <option value="fixed">Fixed</option>
                     <option value="default" selected="selected">Default</option>
                  </select>
               </div>
            </div>
         </div>
         <!-- END BEGIN STYLE CUSTOMIZER -->  
         <!-- BEGIN PAGE HEADER-->
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Dashboard <small>User's Info</small>
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                     <a href="<?php echo site_url('home');?>">Home</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li>Dashboard</li>
                  <li class="pull-right">
                     <div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
                        <i class="icon-calendar"></i>
                        <span></span>
                        <i class="icon-angle-down"></i>
                     </div>
                  </li>
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>
         <!-- END PAGE HEADER-->
         <!-- BEGIN DASHBOARD STATS -->
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        
           <?php  if(!empty($message)) {?>
 <div class="alert alert-success">
  <a class="close" data-dismiss="alert"></a>
   <?php echo $message;?>
</div>

<?php } ?>
        </div>
        </div>
        
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="dashboard-stat blue">
                
               
                 <style>
		  .hidden_div { display:none;}
		  #recordcontent{ width:99%; height: auto;
overflow: hidden;}
		  #recordcontent img{ vertical-align:middle;}
		
		#recordcontent *{
  
	-webkit-box-sizing: content-box;
-moz-box-sizing: content-box;
box-sizing: content-box;
}
		
		
		/*  
		 #recordcontent div, #recordcontent input, #recordcontent select, #recordcontent textarea, #recordcontent span,#recordcontent img,#recordcontent table,#recordcontent td,#recordcontent th,#recordcontent p,#recordcontent a,#recordcontent button,#recordcontent ul,#recordcontent code,#recordcontent pre,#recordcontent li {
 
-moz-border-radius: 3px !important;
-webkit-border-radius: 3px !important;
border-radius: 3px !important;
}
#recordcontent{
-webkit-box-sizing: none !important;
-moz-box-sizing: none !important;
box-sizing: none !important;
}*/
		  
		  </style>
                
                
                 <div align="center" id="recordcontent">
         
	     
		 
		   
            <link rel="stylesheet" href="<?php echo base_url();?>jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url();?>scripts/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxdata.js"></script> 
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxmenu.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxgrid.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxgrid.selection.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxtabs.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>scripts/gettheme.js"></script>
    
     <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxlistbox.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxdropdownlist.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxgrid.filter.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxgrid.sort.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxgrid.selection.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxpanel.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxcalendar.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxdatetimeinput.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxcheckbox.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxgrid.pager.js"></script> 
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxgrid.sort.js"></script> 
        <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxgrid.columnsresize.js"></script> 
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxgrid.columnsreorder.js"></script> 
    <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxwindow.js"></script>
     <script type="text/javascript" src="<?php echo base_url();?>jqwidgets/jqxgrid.edit.js"></script>  
    <script type="text/javascript">
	 
	 
	/* var data = new Array();
	<?php for($i=0;$i<=10;$i++) {?>
	data[<?php echo $i;?>] =   {'firstname':'lokman', 'lastname':'hossain', 'title':'g', 'titleofcourtesy':'ggg', 'birthdate':'123', 'hiredate':'f76', 'address':'www', 'city':'wewew', 'postalcode':'4343', 'country':'Bangladesh','homephone':'755','notes':'445454'} ;
	<?php } ?>*/
	
        $(document).ready(function () {
			
			
			
			
			
			$.ajaxSetup({async: false});
			
            var theme = getDemoTheme();

           
		   
		    var data = new Array();
		     
					  var icount=0;
					  $.get('<?php echo base_url();?>user/userlist', function(data12) {													
			  
			
					 $.each(data12, function(key, val) {
			 
						 
			            data[icount] =  {'ID':val.id, 'Delete':val.id, 'Username':val.username, 'email':val.email, 'titleofcourtesy':'ggg', 'birthdate':'123', 'hiredate':'f76', 'address':'www', 'banned':(val.banned==1)?"Yes":"No", 'Active':(val.activated==1)?"Yes":"No", 'last_login':val.last_login,'created':val.created,'notes':'Notes Here', 'image':val.Thumbimage} ;
						 
						
						icount++;
								 });
			 
							});  
		   
		   
		   
		   
		   var imagerenderer = function (row, datafield, value) {
                return '<img style="margin-left: 10px; padding-top:1px;" height="40" width="40" src="<?php echo base_url();?>' + value + '"/>';
            }
		   
		   
		    var editbutton = function (row, datafield, value) {
                 return '<input onClick="buttonclick('+value+')"  class="jqx-rc-all jqx-button jqx-widget jqx-fill-state-normal" type="button" style="margin:6px 10px; width:70px; height:25px;" value="Edit" />';
            }
		   
		   var dbutton = function (row, datafield, value) {
			   //alert(value);
			 
                 return '<div style="margin:6px 10px;  width:70px; height:23px;" class="jqx-rc-all jqx-button jqx-widget jqx-fill-state-normal"><a   onClick="return confirm(\'Are you sure?\')" href="<?php echo base_url();?>user/delete/'+value+'"     style="height:23px; line-height:23px; color:#000;" >Delete</a></div>';
            }
		   

          
            var source =
            {
                localdata: data,
                datatype: "array",
				id: 'ID',
				
				datafields: [
				{ name: 'ID'},
				{ name: 'Username'},
				{ name: 'email'},
				{ name: 'titleofcourtesy'},
				{ name: 'birthdate'},
				{ name: 'hiredate'},
				{ name: 'address'},
				{ name: 'banned'},
				{ name: 'Active'},
				{ name: 'created'},
				{ name: 'notes'}, 
				{ name: 'image'}, 
				{ name: 'last_login', type: 'date', format: 'yyyy-MM-dd HH:mm:ss'},
				{ name: 'Delete'}
				],
				
				deleterow: function (rowid, commit) {
                   
				 
				   
				   for (i=0; i<rowid.length; i++){
					   
									var datarow = "delete=true&Item_ID=" + rowid[i];
									   var flag = '';
										$("#indicator").css('display','block');
											$.ajax({
																		dataType: 'html',
																		type: 'post',
																		url: '<?php echo base_url();?>user/deleterow',
																		data: datarow,
																		success: function (datares) {
											 flag = datares;
											 
											}
											});	
									   
									   if(flag=='OKAY')
											 commit(true);
									   else
											 commit(false);
									   
									   $("#indicator").html('');
					  				 }
				   
				     
                },
				
			      updaterow: function (rowid, rowdata, commit) {
                    // synchronize with the server - send update command
				
					var banned_item = (rowdata.banned=='Yes') ? 1 : 0;
					 var active_item = (rowdata.Active=='Yes') ? 1 : 0;
                    var datarow = "update=1&Username=" + rowdata.Username + "&email=" + rowdata.email + '&banned='+banned_item+'&activated='+active_item;
                   datarow = datarow + "&Item_ID=" + rowdata.ID;
                   
				   
				 // $("#indicator").fadeIn(200).html('<img src="http://localhost/bdblog/siteimages/ajax-loader.gif" />');
				   $("#indicator").css('display','block');
				    $.ajax({
                        dataType: 'html',
						type: 'post',
                       	url: '<?php echo base_url();?>user/updaterow',
                        data: datarow,
                        success: function (datares, status, xhr) {
                           			 
									
								 
									 if(datares=='OKAY')
				  		 				 		commit(true);
								     else
									 			 commit(false); 
												 $("#indicator").css('display','none');
                            
                        },
                        error: function () {
                            
                            commit(false);
							$("#indicator").html('');
                        }
						
						
						
                    }); 
                }	
				
				
				
				
            };

            var initrowdetails = function (index, parentElement, gridElement, datarecord) {
              
			  
			    var tabsdiv = null;
                var information = null;
                var notes = null;
                tabsdiv = $($(parentElement).children()[0]);

                if (tabsdiv != null) {
                    information = tabsdiv.find('.information');
                    notes = tabsdiv.find('.notes');
                    var title = tabsdiv.find('.title');
                   // title.text(datarecord.ID);
 					title.text('Info');  //lokman
                    var container = $('<div style="margin: 5px;"></div>')
                    container.appendTo($(information));
                    var photocolumn = $('<div style="float: left; width: 15%;"></div>');
                    var leftcolumn = $('<div style="float: left; width: 45%;"></div>');
                    var rightcolumn = $('<div style="float: left; width: 40%;"></div>');
                    container.append(photocolumn);
                    container.append(leftcolumn);
                    container.append(rightcolumn);

                    var photo = $("<div class='jqx-rc-all' style='margin: 10px;'><b>Photo:</b></div>");
                    var image = $("<div style='margin-top: 10px;'></div>");
                    var imgurl = '<?php echo base_url();?>/' + datarecord.image;
                    var img = $('<img height="60" src="' + imgurl + '"/>');
                    image.append(img);
                    image.appendTo(photo);
                    photocolumn.append(photo);

                    var ID = "<div style='margin: 10px;'><b>ID:</b> " + datarecord.ID + "</div>";
                    var Username = "<div style='margin: 10px;'><b>Last Name:</b> " + datarecord.Username + "</div>";
                    var title = "<div style='margin: 10px;'><b>Email:</b> " + datarecord.email + "</div>";
                    //var address = "<div style='margin: 10px;'><b>Address:</b> " + datarecord.address + "</div>";
                    $(leftcolumn).append(ID);
                    $(leftcolumn).append(Username);
                    $(leftcolumn).append(title);
                    //$(leftcolumn).append(address);

                    var Active = "<div style='margin: 10px;'><b>Active?:</b> " + datarecord.Active + "</div>";
                    var banned = "<div style='margin: 10px;'><b>Banned:</b> " + datarecord.banned + "</div>";
                    var phone = "<div style='margin: 10px;'><b>Created Date:</b> " + datarecord.created + "</div>";
                  //  var hiredate = "<div style='margin: 10px;'><b>Hire Date:</b> " + datarecord.hiredate + "</div>";

                    $(rightcolumn).append(Active);
                    $(rightcolumn).append(banned);
                    $(rightcolumn).append(phone);
                   // $(rightcolumn).append(hiredate);

                    var notescontainer = $('<div style="white-space: normal; margin: 5px;"><span>' + datarecord.notes + '</span></div>');
                    $(notes).append(notescontainer);
                    $(tabsdiv).jqxTabs({ width: 700, height: 150, theme: theme });
                }
            }
            var dataAdapter = new $.jqx.dataAdapter(source);

            $("#jqxgrid").jqxGrid(
            {
                showfilterrow: true,
                filterable: true,
				selectionmode: 'multiplerows',  
			    pageable: true,
				editable: true,
				editmode: 'dblclick',
			    width: 900,
				columnsresize: true,
				 columnsreorder: true,
               //  height: 500,
				  autoheight: true,
				  sortable: true,
                source: dataAdapter,
                theme: theme,
				statusbarheight: 50,
				sortable: true,
                scrollmode: 'deferred',
				showstatusbar: true,
				renderstatusbar: function (statusbar) {
                    // appends buttons to the status bar.
					
					var container2 = $("<div style='overflow: hidden; position: relative; margin: 5px; height:50px;'></div>");
                    var addButton = $("<div style='float: left; margin-left: 5px;'><img style='position: relative; margin-top: 2px;' src='<?php echo base_url();?>images/add.png'/><span style='margin-left: 4px; position: relative; top: 0px;'>Add</span></div>");
					var deleteButton = $("<div style='float: left; margin-left: 5px;'><img style='position: relative; margin-top: 2px;' src='<?php echo base_url();?>images/close.png'/><span style='margin-left: 4px; position: relative; top: 0px;'>Delete</span></div>");
                    var searchButton = $("<div style='float: left; margin-left: 5px;'><img style='position: relative; margin-top: 2px;' src='<?php echo base_url();?>images/search.png'/><span style='margin-left: 4px; position: relative; top: 0px;'>Find</span></div>");
                    var filterButton = $("<div style='float: left; margin-left: 5px;'><img style='position: relative; margin-top: 2px;' src='<?php echo base_url();?>images/filter.png'/><span style='margin-left: 4px; position: relative; top: 0px;'>Remove Filter</span></div>");
                   var refreshbutton =  $("<div style='float: left; margin-left: 5px;'><img style='position: relative; margin-top: 2px;' src='<?php echo base_url();?>images/refresh.png'/><span style='margin-left: 4px; position: relative; top: 0px;'>Refresh</span></div>");
				  
					var indicator = $("<div id='indicator' style='display:none; float: left; margin-left: 5px;'><img style='position: relative; margin-top: 2px;' src='<?php echo base_url();?>images/loader.gif'/></div>");
					
				   container2.append(addButton);
				    container2.append(deleteButton);
                    
                    container2.append(searchButton);
					 container2.append(filterButton);
					 
					  container2.append(refreshbutton);
					 container2.append(indicator);
                     statusbar.append(container2);
                    
					addButton.jqxButton({ theme: theme, width: 60, height: 20 });
                    deleteButton.jqxButton({ theme: theme, width: 65, height: 20 });
                   
                    searchButton.jqxButton({ theme: theme, width: 50, height: 20 });
					filterButton.jqxButton({ theme: theme,  height: 20 });
					// $("#refresh").jqxButton({ theme: theme });
					refreshbutton.jqxButton({ theme: theme,  height: 20 });
					 
					//indicator.jqxButton({ theme: theme,  height: 20 });
					
					
					
					  // add new row.
                    addButton.click(function (event) {
                         window.location = '<?php echo base_url();?>siteadmin/register';
						 
                    }); 
              
                    // delete selected row.
                    deleteButton.click(function (event) { 
					
                var rows  = $("#jqxgrid").jqxGrid('selectedrowindexes');
				
				var selectedRecords = new Array();
				
				
				var row = new Array();
				
				for (var m = 0; m < rows.length; m++) {
                    row_id  = $("#jqxgrid").jqxGrid('getrowid', rows[m]);
                    row.push(row_id); 
					selectedRecords[selectedRecords.length] = row;
				  
                }
				//alert(row);
				 $("#jqxwindow2").jqxWindow({ height: 150, width: 300,   isModal: true, autoOpen: false });
				
				 $("#jqxwindow2").jqxWindow('open');
				  $("#textbox").html(row.length);
				  $("#button_input").click(function () {
					
					//var T = $("#text_input").val();
					 
                   
					
                   $("#jqxgrid").jqxGrid('deleterow', row);
                    $("#jqxwindow2").jqxWindow('close');
                });
                $("#button_no").click(function () {
                    $("#jqxwindow2").jqxWindow('close');
					
                });
				 
				 
				// try to add modal yes no 
				
				
				});
                    
					
					 // remove filter button.
                    filterButton.click(function (event) { 
					 $("#jqxgrid").jqxGrid('clearfilters');
					});
                    
					
					
					
                    // search for a record.
                    searchButton.click(function (event) {
                        var offset = $("#jqxgrid").offset();
                        $("#jqxwindow").jqxWindow('open');    
                        $("#jqxwindow").jqxWindow('move', offset.left + 30, offset.top + 30);
                    });
					
					
					 // refresh button.
                    refreshbutton.click(function (event) {
                         
											$("#indicator").css('display','block');
											
                           						 
											  var data2 = new Array();
								 
										  var icount1=0;
										  $.get('<?php echo base_url();?>user/userlist', function(data122) {													
								  
								
										 $.each(data122, function(key, val) {
								 
											 
											data2[icount1] =  {'ID':val.id, 'Delete':val.id, 'Username':val.username, 'email':val.email, 'titleofcourtesy':'ggg', 'birthdate':'123', 'hiredate':'f76', 'address':'www', 'banned':(val.banned==1)?"Yes":"No", 'Active':(val.activated==1)?"Yes":"No", 'last_login':val.last_login,'created':val.created,'notes':'Notes Here', 'image':val.Thumbimage} ;
											 
											
											icount1++;
													 });
								 
												});  
						 
						 
						   source.localdata = data2,
						  $("#jqxgrid").jqxGrid('clearfilters');
						  $("#jqxgrid").jqxGrid('updatebounddata');
						   $("#indicator").css('display','none');
                    });
					
					
					
                },
				
                scrollfeedback: function(row)
                {
                    return '<table style="height: 150px;"><tr><td><img src="<?php echo base_url();?>' + row.image + '"/></td></tr><tr><td>' + row.Username + '</td></tr></table>';
                },
                rowsheight: 42,
				
				
                rowdetails: true,
                rowdetailstemplate: { rowdetails: "<div style='margin: 10px;'><ul style='margin-left: 30px;'><li class='title'></li><li>Notes</li></ul><div class='information'></div><div class='notes'></div></div>", rowdetailsheight: 200},
                ready: function () {
                    //$("#jqxgrid").jqxGrid('showrowdetails', 0);
                   // $("#jqxgrid").jqxGrid('showrowdetails', 1);
					 
                },   
                initrowdetails: initrowdetails,
                columns: [
                      { text: 'Edit', filterable: false , sortable: false,  editable: false,  datafield: 'ID', width: 100,   cellsrenderer: editbutton},
					  { text: 'Image', filterable: false ,  sortable: false, cellsalign:'center',datafield: 'image', width: 60, cellsrenderer: imagerenderer},
                      { text: 'User Name', columntype: 'textbox',  datafield: 'Username', width: 100 },
                      { text: 'Email', datafield: 'email', width: 180,   validation: function (cell, value) {
						 								
														 var pattern = /^[\w-\.\d*]+@[\w\d]+(\.\w{2,4})$/;
														 
														 
														  if (value == "")
															 return { result: false, message: "Must not be blank" };
														  if (!value.match(pattern) ) {
															  return { result: false, message: "Enter a valid email." };
														  }
														  return true;
													  }
					   	},
                        { text: 'Banned?', datafield: 'banned', width: 70, filtertype: 'checkedlist', columntype: 'dropdownlist',  filteritems: ['Yes','No'],
											 
														 createeditor: function (row, cellvalue, editor) {
											 
											editor.jqxDropDownList({source: ['Yes', 'No'],  autoDropDownHeight: true });
													}
											  
											  
					   },
					   
					   
					    { text: 'Active?', datafield: 'Active', width: 70, filtertype: 'checkedlist', columntype: 'dropdownlist',  filteritems: ['Yes','No'],
											 
														 createeditor: function (row, cellvalue, editor) {
											 
											editor.jqxDropDownList({source: ['Yes', 'No'],  autoDropDownHeight: true });
													}
											  
											  
					   },
					   
                      { text: 'Last Login', datafield: 'last_login',  editable: false, width: 160, filtertype: 'date', cellsformat: 'yyyy-MM-dd HH:mm:ss', columntype: 'datetimeinput' },
					  { text: 'Delete', filterable: false , sortable: false,  editable: false,  datafield: 'Delete', width: 100,   cellsrenderer: dbutton},
                  ]
            });
			
			
			
			
			
			
			
			 /* $('#clearfilteringbutton').jqxButton({ height: 25, theme: theme });
            $('#clearfilteringbutton').click(function () {
                $("#jqxgrid").jqxGrid('clearfilters');
            });*/
		/*	 $("#deleterowbutton").jqxButton({ theme: theme });
			 
			 
			 $("#deleterowbutton").on('click', function () {
                var rows  = $("#jqxgrid").jqxGrid('selectedrowindexes');
				
				var selectedRecords = new Array();
				
				for (var m = 0; m < rows.length; m++) {
                    var row = $("#jqxgrid").jqxGrid('getrowid', rows[m]);
                    selectedRecords[selectedRecords.length] = row;
				   $("#jqxgrid").jqxGrid('deleterow', row);
                } });*/
			
			
			
			 // create jqxWindow.
            $("#jqxwindow").jqxWindow({ resizable: false, theme: theme, autoOpen: false, width: 210, height: 180 });
            // create find and clear buttons.
            $("#findButton").jqxButton({ width: 70, theme: theme });
            $("#clearButton").jqxButton({ width: 70, theme: theme });
            // create dropdownlist.
            $("#dropdownlist").jqxDropDownList({ autoDropDownHeight: true, selectedIndex: 0, width: 200, height: 23, theme: theme,
                source: [
                    'User Name', 'Email', 'Last Login', 'Banned?', 'Active?'
                ]
            });

            if (theme != "") {
                $("#inputField").addClass('jqx-input-' + theme);
            }

            // clear filters.
            $("#clearButton").click(function () {
                $("#jqxgrid").jqxGrid('clearfilters');
            });
			
			 // find records that match a criteria.
            $("#findButton").click(function () {
                $("#jqxgrid").jqxGrid('clearfilters');
                var searchColumnIndex = $("#dropdownlist").jqxDropDownList('selectedIndex');
                var datafield = "";
                switch (searchColumnIndex) {
                    case 0:
                        datafield = "Username";
                        break;
                    case 1:
                        datafield = "email";
                        break;
                    case 2:
                        datafield = "last_login";
                        break;
                    case 3:
                        datafield = "banned";
                        break;
						
					case 4:
                        datafield = "Active";
                        break;	
						
                    
                }

                var searchText = $("#inputField").val();
                var filtergroup = new $.jqx.filter();
                var filter_or_operator = 1;
                var filtervalue = searchText;
                var filtercondition = 'contains';
                var filter = filtergroup.createfilter('stringfilter', filtervalue, filtercondition);
                filtergroup.addfilter(filter_or_operator, filter);
                $("#jqxgrid").jqxGrid('addfilter', datafield, filtergroup);
                // apply the filters.
                $("#jqxgrid").jqxGrid('applyfilters');
            });
			
			
			
			
			
			
			
			
			
			
			
			// $('.hidden_div').show();
			 
        });
		
	 
    </script>
    
    <script type="text/javascript">
            var buttonclick = function (id) {
               
			    var buttonID = id;
				
				window.location = '<?php echo base_url();?>user/edit/'+buttonID;
			    //alert(buttonID);
            }
			
			
			var dbuttonclick = function (id) {
               
			    var buttonID = id;
				 
				window.location = '<?php echo base_url();?>user/delete/'+buttonID;
			    //alert(buttonID);
            }
			
			
        </script>
    
    
    
    <div id='jqxWidget' style="font-size: 13px; font-family: Verdana; float: left;">
    
    <div id='jqxwindow2' style="display:none;">
            <div>
                Header</div>
            <div>
                
               You are about to delete <span id='textbox'>sdsds</span> record(s). Sure? <br />  <br /> 
                <input type="button" value="Yes" id="button_input" />
                <input type="button" value="No" id="button_no" />
            </div>
        </div>
        <div id="jqxgrid"></div>
        
        <div id="jqxwindow" class="hidden_div">
            <div>
                Find Record</div>
            <div style="overflow: hidden;">
                <div>
                    Find what:</div>
                <div style='margin-top:5px;'>
                    <input id='inputField' type="text" class="jqx-input" style="width: 200px; height: 23px;" />
                </div>
                <div style="margin-top: 7px; clear: both;">
                    Look in:</div>
                <div style='margin-top:5px;'>
                    <div id='dropdownlist'>
                    </div>
                </div>
                <div>
                    <input type="button" style='margin-top: 15px; margin-left: 50px; float: left;' value="Find" id="findButton" />
                    <input type="button" style='margin-left: 5px; margin-top: 15px; float: left;' value="Clear" id="clearButton" />
                </div>
            </div>
        </div>
        
       
       <!-- <input style="margin-top: 10px;" value="Remove Filter" id="clearfilteringbutton" type="button" />-->
      <!--  <div style="margin-top: 10px;">
                <input id="deleterowbutton" type="button" value="Delete Selected Row" />
            </div>-->
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
           
           
           </div>
                
                
                
                
                
                
                
                               
               </div>
            </div>
             
             
             
         </div>
         <!-- END DASHBOARD STATS -->
         <div class="clearfix"></div>
          
         
          
        
          
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->
  