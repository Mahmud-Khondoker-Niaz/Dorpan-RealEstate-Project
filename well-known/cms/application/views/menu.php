<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>



<div align="center" id="recordcontent">
          <style>
		  .hidden_div { display:none;}
		  </style>
	     
		 <?php echo $message; ?>
		   
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
					  $.get('<?php echo base_url();?>menu/menusectionlist', function(data12) {													
			  
			
					 $.each(data12, function(key, val) {
			 
						 
			            data[icount] =  {'ID':val.MenuSectionID, 'DeleteID':val.MenuSectionID, 'EditID':val.MenuSectionID, 'Caption':val.Caption,'notes':'Notes Here'} ;
						 
						
						icount++;
								 });
			 
							});  

		   
		   
		   
 
		     var editbutton = function (row, datafield, value) {
				  
				 
                 return '<input onClick="buttonclick('+value+')"  class="jqx-rc-all jqx-button jqx-widget jqx-fill-state-normal" type="button" style="margin:6px 10px; width:70px; height:30px;" value="Edit" />';
            }
		   
		   var dbutton = function (row, datafield, value) {
			   //alert(value);
			 
                 return '<div style="margin:6px 10px;  width:70px; height:23px;" class="jqx-rc-all jqx-button jqx-widget jqx-fill-state-normal"><a   onClick="return confirm(\'Are you sure?\')" href="<?php echo base_url();?>menu/sectiondelete/'+value+'"     style="height:23px; line-height:23px; color:#000;" >Delete</a></div>';
            }
		   
		   
		 
          
            var source =
            {
                localdata: data,
                datatype: "array",
				id: 'ID',
				
				datafields: [
				{ name: 'ID'},
				{ name: 'Caption'},
	 
			 	 { name: 'EditID'},
			   { name: 'DeleteID'},
				 
				{ name: 'notes'} 
				],
				
		 	     
				 deleterow: function (rowid, commit) {
                   
				 
				   
				   for (i=0; i<rowid.length; i++){
					   
									var datarow = "delete=true&Item_ID=" + rowid[i];
									   var flag = '';
										$("#indicator").css('display','block');
											$.ajax({
																		dataType: 'html',
																		type: 'post',
																		url: '<?php echo base_url();?>menu/menusectiondeleterow',
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
									 
									 
									 
									 
									 
									 
									 
									 
									 
									 //////////////////////////refreshing grid/////////////////////////////
									
                         
											$("#indicator").css('display','block');
											var data3 = new Array();
								 
										  var icount3=0;
										  $.get('<?php echo base_url();?>menu/menusectionlist', function(data122) {													
								  
								
										 $.each(data122, function(key, val) {
								 
										 	 
											data3[icount3] =    {'ID':val.MenuSectionID, 'DeleteID':val.MenuSectionID, 'EditID':val.MenuSectionID, 'Caption':val.Caption,'notes':'Notes Here'} ;
											 
											
											icount3++;
													 });
								 
												});  
						 
						   source.localdata = data3;
						  $("#jqxgrid").jqxGrid('clearfilters');
						  $("#jqxgrid").jqxGrid('updatebounddata');
						   $("#indicator").css('display','none');
                     
									 
									 
									 ////////////////////refreshing grid ends///////////////////////////
									 
									 
									 
									 
									 
									 
									 
									 
									 
									 
									 
									 
									 
									 
				   
				     
                },
				
			      
				
			      updaterow: function (rowid, rowdata, commit) {
                    // synchronize with the server - send update command
				
					 
				    
			 
					 
                    var datarow = "update=1"+ '&Caption='+rowdata.Caption;
                   datarow = datarow  + "&Item_ID=" + rowdata.ID;
                   
				  
					
				 // $("#indicator").fadeIn(200).html('<img src="http://localhost/bdblog/siteimages/ajax-loader.gif" />');
				   $("#indicator").css('display','block');
				    $.ajax({
                        dataType: 'html',
						type: 'post',
                       	url: '<?php echo base_url();?>menu/updatemenusectionrow',
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
                   
                    var leftcolumn = $('<div style="float: left; width: 55%;"></div>');
                    var rightcolumn = $('<div style="float: left; width: 45%;"></div>');
                    
                    container.append(leftcolumn);
                    container.append(rightcolumn);

              



                    var ID = "<div style='margin: 10px;'><b>Menu ID:</b> " + datarecord.ID + "</div>";
                    $(leftcolumn).append(ID);
                   
                    
					var Caption = "<div style='margin: 10px;'><b>Caption:</b> " + datarecord.Caption + "</div>";
                    $(rightcolumn).append(Caption);
                   
					
					
                   
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
				pagesize: 10,
				pagesizeoptions: ['10', '50', '100'],
				columnsresize: true,
				 columnsreorder: true,
               //  height: 500,
				  autoheight: true,
				  sortable: true,
                source: dataAdapter,
                theme: theme,
				
				 
               
				showstatusbar: true,
				renderstatusbar: function (statusbar) {
                    // appends buttons to the status bar.
					
					var container2 = $("<div style='overflow: hidden; position: relative; margin: 5px; height:50px;'></div>");
                   
					   var addButton = $("<div style='float: left; margin-left: 5px;'><img style='position: relative; margin-top: 2px;' src='<?php echo base_url();?>images/add.png'/><span style='margin-left: 4px; position: relative; top: -3px;'>Add</span></div>");
					var deleteButton = $("<div style='float: left; margin-left: 5px;'><img style='position: relative; margin-top: 2px;' src='<?php echo base_url();?>images/close.png'/><span style='margin-left: 4px; position: relative; top: -3px;'>Delete</span></div>");
                    var searchButton = $("<div style='float: left; margin-left: 5px;'><img style='position: relative; margin-top: 2px;' src='<?php echo base_url();?>images/search.png'/><span style='margin-left: 4px; position: relative; top: -3px;'>Find</span></div>");
                    var filterButton = $("<div style='float: left; margin-left: 5px;'><img style='position: relative; margin-top: 2px;' src='<?php echo base_url();?>images/filter.png'/><span style='margin-left: 4px; position: relative; top: -3px;'>Remove Filter</span></div>");
                   var refreshbutton =  $("<div style='float: left; margin-left: 5px;'><img style='position: relative; margin-top: 2px;' src='<?php echo base_url();?>images/refresh.png'/><span style='margin-left: 4px; position: relative; top: -3px;'>Refresh</span></div>");
				  
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
                         window.location = '<?php echo base_url();?>menu/sectionentry';
						 
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
										  $.get('<?php echo base_url();?>menu/menusectionlist', function(data122) {													
								  
								
										 $.each(data122, function(key, val) {
								 
											  
											 
											data2[icount1] =    {'ID':val.MenuSectionID, 'DeleteID':val.MenuSectionID, 'EditID':val.MenuSectionID, 'Caption':val.Caption,'notes':'Notes Here'} ;
											 
											
											icount1++;
													 });
								 
												});  
						 
						 
						   source.localdata = data2;
						  $("#jqxgrid").jqxGrid('clearfilters');
						  $("#jqxgrid").jqxGrid('updatebounddata');
						   $("#indicator").css('display','none');
                    });
					
					
					
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
				 { text: 'Edit', filterable: false , sortable: false,  editable: false,  datafield: 'EditID', width: 100,   cellsrenderer: editbutton},
				 
				
				 
						  { text: 'ID', columntype: 'textbox', editable: false, datafield: 'ID', width: 80 },
                        { text: 'Caption', columntype: 'textbox',    datafield: 'Caption', width: 100 },
                      
                         
					    { text: 'Delete', filterable: false , sortable: false,  editable: false,  datafield: 'DeleteID', width: 100,   cellsrenderer: dbutton}
					   
					   
					    
                  ]
            });
			
			
			
			
			 
			
			
			 // create jqxWindow.
            $("#jqxwindow").jqxWindow({ resizable: false, theme: theme, autoOpen: false, width: 210, height: 180 });
            // create find and clear buttons.
            $("#findButton").jqxButton({ width: 70, theme: theme });
            $("#clearButton").jqxButton({ width: 70, theme: theme });
            // create dropdownlist.
            $("#dropdownlist").jqxDropDownList({ autoDropDownHeight: true, selectedIndex: 0, width: 200, height: 23, theme: theme,
                source: [
                    'ID',   'Caption'
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
                        datafield = "ID";
                        break;
				  
                    case 1:
                        datafield = "Caption";
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
				 
				//window.location = '<?php echo base_url();?>basicsetup/categoryedit/'+buttonID;
				window.location = '<?php echo base_url();?>menu/sectionentry/'+buttonID;
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



</body>
</html>