var multipleCancelButton,multiSelect=document.getElementById("choices-multiple-remove-button");multiSelect&&(multipleCancelButton=new Choices("#choices-multiple-remove-button",{removeItemButton:!0})),document.addEventListener("DOMContentLoaded",function(){var e=document.querySelectorAll("[data-trigger]");for(i=0;i<e.length;++i){var t=e[i];new Choices(t,{placeholderValue:"This is a placeholder set in the config",searchPlaceholderValue:"This is a search placeholder"})}});