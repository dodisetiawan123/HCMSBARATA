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
  

  // Pilih Pendidikan
  var singleNoSorting = new Choices('#pilih-pendidikan', {
    shouldSort: false,
  });

  // Nama Jabatan
  // var singleNoSorting = new Choices('#pilih-jabatan', {
  //   shouldSort: false,
  // });

  // Pilih Bagian
  // var singleNoSorting = new Choices('#pilih-bagian', {
  //   shouldSort: false,
  // });
  // Pilih Bagian
  var singleNoSorting = new Choices('#pilih-level', {
    shouldSort: false,
  });
  // var singleNoSorting = new Choices('#pilih-leveltrf', {
  //   shouldSort: false,
  // });

  // Nama Organisasi
  var singleNoSorting = new Choices('#idmd_organisasi', {
    shouldSort: false,
  });

  // Jenis kelamin
  var singleNoSorting = new Choices('#jenis-kelamin', {
    shouldSort: false,searchEnabled: false,
  });

  // Status
  var singleNoSorting = new Choices('#status', {
    shouldSort: false,searchEnabled: false,
  });

  // Status
  var singleNoSorting = new Choices('#agama', {
    shouldSort: false,searchEnabled: false,
  });

  // Fungsi
  var singleNoSorting = new Choices('#fungsi', {
    shouldSort: false,searchEnabled: false,
  });

  // var singleNoSorting = new Choices('#fungsitrf', {
  //   shouldSort: false,searchEnabled: false,
  // });

  // Status Jabatan
  var singleNoSorting = new Choices('#statusjabatan', {
    shouldSort: false,searchEnabled: false,
  });
  // Status Jabatan
  // var singleNoSorting = new Choices('#statusjabatantrf', {
  //   shouldSort: false,searchEnabled: false,
  // });

   // Nama Organisasi
  // var singleNoSorting = new Choices('#idmd_organisasitrf', {
  //   shouldSort: false,
  // });

  // Status Jabatan
  // var singleNoSorting = new Choices('#grade', {
  //   shouldSort: false,searchEnabled: false,
  // });

  // // status-keaktifan
  // var singleNoSorting = new Choices('#status-keaktifan', {
  //   shouldSort: false,searchEnabled: false,
  // });

  //  // status-dirumahkan
  // var singleNoSorting = new Choices('#status-dirumahkan', {
  //   shouldSort: false,searchEnabled: false,
  // });

  // // status-batch
  // var singleNoSorting = new Choices('#status-batch', {
  //   shouldSort: false,searchEnabled: false,
  // });

  // // aktifitasobsolete
  // var singleNoSorting = new Choices('#aktifitasobsolete', {
  //   shouldSort: false,searchEnabled: false,
  // });

  // // aktifitas2022
  // var singleNoSorting = new Choices('#aktifitas2022', {
  //   shouldSort: false,searchEnabled: false,
  // });

  // // subaktifitas
  // var singleNoSorting = new Choices('#subaktifitas', {
  //   shouldSort: false,searchEnabled: false,
  // });

  // // statuskepegawaian
  // var singleNoSorting = new Choices('#statuskepegawaian', {
  //   shouldSort: false,searchEnabled: false,
  // });

  // // tekniknonteknik
  // var singleNoSorting = new Choices('#tekniknonteknik', {
  //   shouldSort: false,searchEnabled: false,
  // });

 
  
  
  

});


// flatpickr

flatpickr('#datepicker-basic');

flatpickr('#datepicker-datetime-tanggallahir', {
  enableTime: false,
  maxDate: new Date().fp_incr(0),
  dateFormat: "Y-m-d",
  allowInput: true
});

flatpickr('#tanggal-dirumahkan', {
  enableTime: false,
  maxDate: new Date().fp_incr(0),
  dateFormat: "Y-m-d",
  allowInput: true
});

flatpickr('#tgldiangkat', {
  enableTime: false,
  maxDate: new Date().fp_incr(0),
  dateFormat: "Y-m-d",
  allowInput: true
});

flatpickr('#datepicker-datetime-tanggalmasuk', {
  enableTime: false,
  maxDate: new Date().fp_incr(0),
  dateFormat: "Y-m-d",
  allowInput: true
});

flatpickr('#datepicker-datetime-tmtjabatan', {
  enableTime: false,
  maxDate: new Date().fp_incr(0),
  dateFormat: "Y-m-d",
  allowInput: true
});
// flatpickr('#datepicker-datetime-tmtjabatantrf', {
//   enableTime: false,
//   maxDate: new Date().fp_incr(0),
//   dateFormat: "Y-m-d",
//   allowInput: true
// });

flatpickr('#datepicker-datetime-tanggalangkat', {
  enableTime: false,
  maxDate: new Date().fp_incr(0),
  dateFormat: "Y-m-d",
  allowInput: true
});
flatpickr('#datepicker-datetime-lulus', {
  enableTime: false,
  maxDate: new Date().fp_incr(0),
  dateFormat: "Y",
  allowInput: true
});

flatpickr('#datepicker-humanfd', {
  altInput: true,
  altFormat: "F j, Y",
  dateFormat: "Y-m-d",
  allowInput: true
});

flatpickr('#datepicker-minmax', {
  minDate: "today",
  maxDate: new Date().fp_incr(14) // 14 days from now
});

flatpickr('#datepicker-disable', {
  onReady: function () {
    this.jumpToDate("2025-01")
  },
  disable: ["2025-01-30", "2025-02-21", "2025-03-08", new Date(2025, 4, 9)],
  dateFormat: "Y-m-d",
});

flatpickr('#datepicker-multiple', {
  mode: "multiple",
  dateFormat: "Y-m-d"
});

flatpickr('#datepicker-range', {
  mode: "range"
});

flatpickr('#datepicker-timepicker', {
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i",
});

flatpickr('#datepicker-inline', {
  inline: true
});



