/*
Template Name: Minia - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Form mask Js File
*/

document.addEventListener("DOMContentLoaded", function () {

 

    // Pattern (Phone)
    var currencyMask = IMask(document.getElementById('currency-gaji-pokok'), {
        mask: 'num',
        blocks: {
        num: {
                // nested masks are available!
                mask: Number,
                thousandsSeparator: '.'
            }
        }
    });

    var currencyMask = IMask(document.getElementById('currency-tunjangan-kesejahteraan-konversi'), {
        mask: 'num',
        blocks: {
        num: {
                // nested masks are available!
                mask: Number,
                thousandsSeparator: '.'
            }
        }
    });

    var currencyMask = IMask(document.getElementById('currency-tunjangan-peralihan'), {
        mask: 'num',
        blocks: {
        num: {
                // nested masks are available!
                mask: Number,
                thousandsSeparator: '.'
            }
        }
    });

    var currencyMask = IMask(document.getElementById('currency-tunjangan-peralihan-jabatan'), {
        mask: 'num',
        blocks: {
        num: {
                // nested masks are available!
                mask: Number,
                thousandsSeparator: '.'
            }
        }
    });

    var currencyMask = IMask(document.getElementById('tunjangan-peralihan'), {
        mask: 'num',
        blocks: {
        num: {
                // nested masks are available!
                mask: Number,
                thousandsSeparator: '.'
            }
        }
    });

    var currencyMask = IMask(document.getElementById('tunjangan-jabatan'), {
        mask: 'num',
        blocks: {
        num: {
                // nested masks are available!
                mask: Number,
                thousandsSeparator: '.'
            }
        }
    });

    var currencyMask = IMask(document.getElementById('upah-pokok-berlaku'), {
        mask: 'num',
        blocks: {
        num: {
                // nested masks are available!
                mask: Number,
                thousandsSeparator: '.'
            }
        }
    });








    var currencyMask = IMask(document.getElementById('ue-gaji-pokok-konversi'), {
        mask: 'num',
        blocks: {
        num: {
                // nested masks are available!
                mask: Number,
                thousandsSeparator: '.'
            }
        }
    });

    var currencyMask = IMask(document.getElementById('ue-tunjangan-kesejahteraan-konversi'), {
        mask: 'num',
        blocks: {
        num: {
                // nested masks are available!
                mask: Number,
                thousandsSeparator: '.'
            }
        }
    });

     var currencyMask = IMask(document.getElementById('ue-tunjangan-peralihan-upah-pokok'), {
        mask: 'num',
        blocks: {
        num: {
                // nested masks are available!
                mask: Number,
                thousandsSeparator: '.'
            }
        }
    });

     var currencyMask = IMask(document.getElementById('ue-tunjangan-peralihan-jabatan'), {
        mask: 'num',
        blocks: {
        num: {
                // nested masks are available!
                mask: Number,
                thousandsSeparator: '.'
            }
        }
    });

    var currencyMask = IMask(document.getElementById('ue-tunjangan-peralihan'), {
        mask: 'num',
        blocks: {
        num: {
                // nested masks are available!
                mask: Number,
                thousandsSeparator: '.'
            }
        }
    });

    var currencyMask = IMask(document.getElementById('ue-tunjangan-jabatan'), {
        mask: 'num',
        blocks: {
        num: {
                // nested masks are available!
                mask: Number,
                thousandsSeparator: '.'
            }
        }
    });

    

    var currencyMask = IMask(document.getElementById('ue-upah-pokok-efisiensi'), {
        mask: 'num',
        blocks: {
        num: {
                // nested masks are available!
                mask: Number,
                thousandsSeparator: '.'
            }
        }
    });

    var currencyMask = IMask(document.getElementById('ue-tunjangan-penyesuaian'), {
        mask: 'num',
        blocks: {
        num: {
                // nested masks are available!
                mask: Number,
                thousandsSeparator: '.'
            }
        }
    });


});