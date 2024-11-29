document.querySelector("#profile-img-file-input").addEventListener("change",function(){var e=document.querySelector(".user-profile-image");e||(e='<img src="assets/images/users/avatar-1.jpg" id="userProfileImage" class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt="user-profile-image">',document.querySelector(".profile-user .avatar-lg").outerHTML=e,e=document.querySelector(".user-profile-image"));var t=document.querySelector(".profile-img-file-input").files[0],a=new FileReader;a.addEventListener("load",function(){e.src=a.result},!1),t&&a.readAsDataURL(t)});var itemid=11,updateid="";function deleteEmployee(e){updateid=e,document.getElementById(updateid).remove()}function editProjects(e){updateid=e;var t,a=document.getElementById(updateid).querySelector(".employee-designation").textContent,i=document.getElementById(updateid).querySelector(".employee-name").textContent;"text"==document.getElementById(updateid).querySelector(".employee-image").getAttribute("data-type")?(t=document.getElementById(updateid).querySelector(".employee-image").innerHTML,document.querySelector("#employee-image-form").innerHTML="",document.querySelector("#employee-image-form").innerHTML="<div class='avatar-lg mx-auto img-thumbnail rounded-circle'>            <span class='avatar-title rounded-circle fs-4 bg-soft-primary text-primary'>                "+i[0]+"            </span>        </div>"):(t=document.getElementById(updateid).querySelector(".employee-image").getAttribute("src"),document.querySelector("#employee-image-form").innerHTML="",document.querySelector("#employee-image-form").innerHTML="<div class='user-profile'>            <img src='"+t+"' id='userProfileImage'                class='rounded-circle avatar-xl img-thumbnail user-profile-image'                alt='user-profile-image'>        </div>");var d=document.getElementById(updateid).querySelector(".employee-phoneno").getAttribute("data-bs-original-title"),l=document.getElementById(updateid).querySelector(".employee-email").getAttribute("data-bs-original-title");document.getElementById(updateid).querySelectorAll(".employee-tags .badge").forEach(function(e){var t=e.innerHTML;multipleCancelButton.setChoiceByValue(t)}),document.querySelector("#employeeName").value=i,document.querySelector("#employeePosition").value=a.trim(),document.querySelector("#exampleEmailId").value=l,document.querySelector("#PhoneNo").value=d,document.querySelector("#updatetaskdetail").style.display="block",document.querySelector("#addtask").style.display="none",document.querySelector(".update-task-title").style.display="block",document.querySelector(".add-task-title").style.display="none"}function addEmployee(){document.getElementById("NewtaskForm").reset(),user_icon="<div class='avatar-lg mx-auto img-thumbnail rounded-circle'>                    <span class='avatar-title rounded-circle fs-4 bg-soft-primary text-primary'>                        <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-user'><path d='M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2'></path><circle cx='12' cy='7' r='4'></circle></svg>                    </span>                </div>",document.querySelector("#employee-image-form").innerHTML="",document.querySelector("#employee-image-form").innerHTML=user_icon,document.querySelector("#updatetaskdetail").style.display="none",document.querySelector("#addtask").style.display="block",document.querySelector(".update-task-title").style.display="none",document.querySelector(".add-task-title").style.display="block"}function searchEmployee(){for(var e,t=document.getElementById("search-employee").value.toLowerCase(),a=document.getElementById("employee-items").querySelectorAll(".employee-item"),i=0;i<a.length;i++)-1<((e=a[i].querySelector(".employee-name")).textContent||e.innerText).toLowerCase().indexOf(t)?a[i].style.display="":a[i].style.display="none"}document.getElementById("updatetaskdetail").addEventListener("click",function(){newid=updateid;var e=document.querySelector("#employeeName").value,t=document.querySelector("#employeePosition").value,a=document.querySelector("#choices-multiple-remove-button"),i=document.querySelector("#exampleEmailId").value,d=document.querySelector("#PhoneNo").value,l="";l=document.querySelector(".user-profile-image")?'<img src="'+document.querySelector("#userProfileImage").getAttribute("src")+'" class="avatar-lg img-fluid rounded-circle employee-image" data-type="image" alt="user-image">':"<div class='avatar-lg mx-auto img-thumbnail rounded-circle'>            <span class='avatar-title rounded-circle fs-4 bg-soft-primary text-primary'>            "+e[0]+"            </span>        </div>";for(var o=new Array,s="",r=a.options.length-1;0<=r;r--)o.push(a[r].value);for(r=0;r<o.length;r++)s=s+'<span class="badge badge-soft-secondary p-2">'+o[r]+"</span> ";updateEmployee='<div class="card">      <div class="card-body">          <div class="text-end">              <div class="dropdown">                  <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                      <i class="mdi mdi-dots-horizontal"></i>                  </a>                  <div class="dropdown-menu dropdown-menu-end">                      <a class="dropdown-item text-primary" href="javascript: void(0);" data-bs-toggle="modal" data-bs-target=".bs-example-edit-employee" onclick="editProjects(`'+updateid+'`)">                          <i class="mdi mdi-file-document-edit-outline me-2"></i>Edit</a>                      <a class="dropdown-item text-danger delete-item" onclick="deleteEmployee(`'+updateid+'`)" href="javascript: void(0);"><i class="mdi mdi-trash-can-outline me-2"></i>Remove</a>                  </div>              </div>          </div>          <div class="text-center">              '+l+'              <h6 class="font-size-15 mt-3 mb-1"><a href="user-profile.html" class="text-primary employee-name">'+e+'</a></h6>              <p class="text-muted mb-0 font-size-12 fw-medium employee-designation">'+t+'</p>          </div>          <div class="d-flex flex-wrap gap-2 mt-3 justify-content-center">              <div>                  <p class="text-muted fw-medium mb-0">Tag :</p>              </div>              <div class="employee-tags d-flex flex-wrap gap-1">                  '+s+'               </div>          </div>      </div>      <div class="card-footer p-0">          <div class="row g-0">              <div class="col-6">                  <div class="text-center border-end p-3">                      <h6 class="font-size-14 mb-0">                          <a href="javascript: void(0);" class="text-muted employee-email" data-bs-toggle="tooltip" data-bs-placement="top" title="'+i+'" aria-describedly="descriptionClose">                              <i class="mdi mdi-email-outline align-middle me-2"></i>E-mail                          </a>                      </h6>                  </div>              </div>              <div class="col-6">                  <div class="text-center p-3">                      <h6 class="font-size-14 text-muted mb-0">                          <a href="javascript: void(0);" class="text-muted employee-phoneno" data-bs-toggle="tooltip" data-bs-placement="top" title="'+d+'" aria-describedly="descriptionClose">                              <i class="mdi mdi-phone-outline align-middle me-2"></i>Phone                          </a>                      </h6>                  </div>              </div>          </div>      </div>    </div>',document.getElementById(newid).innerHTML=updateEmployee,document.getElementById("update-emplyoee").click(),document.getElementById("NewtaskForm").reset(),itemid++}),document.getElementById("addtask").addEventListener("click",function(){var e,t="employee-items-"+itemid,a=document.querySelector("#employeeName").value,i=document.querySelector("#employeePosition").value,d=document.querySelector("#choices-multiple-remove-button"),l=document.querySelector("#exampleEmailId").value,o=document.querySelector("#PhoneNo").value,s=new Array;e=0!=document.querySelector("#profile-img-file-input").files.length||0!=document.querySelector("#profile-img-file-input").files.length?'<img src="'+(e=document.querySelector("#userProfileImage").getAttribute("src"))+'" class="avatar-lg img-fluid rounded-circle employee-image" data-type="image" alt="user-image">':"";for(var r="",m=d.options.length-1;0<=m;m--)s.push(d[m].value);for(m=0;m<s.length;m++)r=r+'<span class="badge badge-soft-secondary p-2">'+s[m]+"</span> ";newemployee=""===e||null===e?'<div class="col-xl-3 col-md-6 employee-item" id="'+t+'">        <div class="card">            <div class="card-body">                <div class="text-end">                    <div class="dropdown">                        <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                            <i class="mdi mdi-dots-horizontal"></i>                        </a>                       <div class="dropdown-menu dropdown-menu-end">                            <a class="dropdown-item text-primary" href="javascript: void(0);" data-bs-toggle="modal" data-bs-target=".bs-example-edit-employee" onclick="editProjects(`'+t+'`)">                                <i class="mdi mdi-file-document-edit-outline me-2"></i>Edit</a>                            <a class="dropdown-item text-danger delete-item" onclick="deleteEmployee(`'+t+'`)" href="javascript: void(0);"><i class="mdi mdi-trash-can-outline me-2"></i>Remove</a>                        </div>                    </div>                </div>               <div class="text-center">                    <div class="employee-image" data-type="text">                        <div class="avatar-lg mx-auto">                            <span class="avatar-title rounded-circle fs-4 bg-soft-primary text-primary">                                '+a[0]+'                            </span>                        </div>                    </div>                    <h6 class="font-size-15 mt-3 mb-1"><a href="user-profile.html" class="text-primary employee-name">'+a+'</a></h6>                    <p class="text-muted mb-0 font-size-12 fw-medium employee-designation">'+i+'</p>                </div>                <div class="d-flex flex-wrap gap-2 mt-3 justify-content-center">                    <div>                        <p class="text-muted fw-medium mb-0">Tag :</p>                    </div>                    <div class="employee-tags d-flex flex-wrap gap-1">                        '+r+'                     </div>                </div>            </div>            <div class="card-footer p-0">                <div class="row g-0">                    <div class="col-6">                        <div class="text-center border-end p-3">                            <h6 class="font-size-14 mb-0">                                <a href="javascript: void(0);" class="text-muted employee-email" data-bs-toggle="tooltip" data-bs-placement="top" title="'+l+'">                                    <i class="mdi mdi-email-outline align-middle me-2"></i>E-mail                                </a>                            </h6>                        </div>                    </div>                    <div class="col-6">                        <div class="text-center p-3">                            <h6 class="font-size-14 text-muted mb-0">                                <a href="javascript: void(0);" class="text-muted employee-phoneno" data-bs-toggle="tooltip" data-bs-placement="top" title="'+o+'" data-bs-original-title="'+o+'" aria-described="descriptionClose">                                    <i class="mdi mdi-phone-outline align-middle me-2"></i>Phone                                </a>                            </h6>                        </div>                    </div>                </div>            </div>        </div>    </div>':'<div class="col-xl-3 col-md-6 employee-item" id="'+t+'">        <div class="card">            <div class="card-body">                <div class="text-end">                    <div class="dropdown">                        <a href="#" class="dropdown-toggle font-size-16 text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                            <i class="mdi mdi-dots-horizontal"></i>                        </a>                       <div class="dropdown-menu dropdown-menu-end">                            <a class="dropdown-item text-primary" href="javascript: void(0);" data-bs-toggle="modal" data-bs-target=".bs-example-edit-employee" onclick="editProjects(`'+t+'`)">                                <i class="mdi mdi-file-document-edit-outline me-2"></i>Edit</a>                            <a class="dropdown-item text-danger delete-item" onclick="deleteEmployee(`'+t+'`)" href="javascript: void(0);"><i class="mdi mdi-trash-can-outline me-2"></i>Remove</a>                        </div>                    </div>                </div>               <div class="text-center">                   '+e+'                    <h6 class="font-size-15 mt-3 mb-1"><a href="user-profile.html" class="text-primary employee-name">'+a+'</a></h6>                    <p class="text-muted mb-0 font-size-12 fw-medium employee-designation">'+i+'</p>                </div>                <div class="d-flex flex-wrap gap-2 mt-3 justify-content-center">                    <div>                        <p class="text-muted fw-medium mb-0">Tag :</p>                    </div>                    <div class="employee-tags d-flex flex-wrap gap-1">                        '+r+'                     </div>                </div>            </div>            <div class="card-footer p-0">                <div class="row g-0">                    <div class="col-6">                        <div class="text-center border-end p-3">                            <h6 class="font-size-14 mb-0">                                <a href="javascript: void(0);" class="text-muted employee-email" data-bs-toggle="tooltip" data-bs-placement="top" title="'+l+'">                                    <i class="mdi mdi-email-outline align-middle me-2"></i>E-mail                                </a>                            </h6>                        </div>                    </div>                    <div class="col-6">                        <div class="text-center p-3">                            <h6 class="font-size-14 text-muted mb-0">                                <a href="javascript: void(0);" class="text-muted employee-phoneno" data-bs-toggle="tooltip" data-bs-placement="top" title="'+o+'" data-bs-original-title="'+o+'" aria-described="descriptionClose">                                    <i class="mdi mdi-phone-outline align-middle me-2"></i>Phone                                </a>                            </h6>                        </div>                    </div>                </div>            </div>        </div>    </div>',document.querySelectorAll("#employee-items")[0].insertAdjacentHTML("afterbegin",newemployee),document.getElementById("update-emplyoee").click(),document.getElementById("NewtaskForm").reset(),itemid++});