/*
Template Name: Minia - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Form advanced Js File
*/


// Chocies Select plugin
document.addEventListener('DOMContentLoaded', function () {
  var genericExamples = document.querySelectorAll('[data-trigger]');
  for (i = 0; i < genericExamples.length; ++i) {
    var element = genericExamples[i];
    new Choices(element, {
    placeholderValue: 'This is a placeholder set in the config',
    searchPlaceholderValue: 'This is a search placeholder',
    });
  }
  

  // Pilih organisasi
  var singleNoSorting = new Choices('#idmd_organisasi', {
    shouldSort: false,
  });

  //Pilih organisasi





  //   var singleNoSearch = new Choices('#idmd_bidang', {
  //   searchEnabled: false,
  //   removeItemButton: true,
  //   choices: [
  //   { value: 'One', label: 'Label One' },
  //   { value: 'Two', label: 'Label Two', disabled: true },
  //   { value: 'Three', label: 'Label Three' },
  //   ],
  // }).setChoices(
  //   [
  //   { value: 'Four', label: 'Label Four', disabled: true },
  //   { value: 'Five', label: 'Label Five' },
  //   { value: 'Six', label: 'Label Six', selected: true },
  //   ],
  //   'value',
  //   'label',
  //   false
  // );
  


  
  

});



