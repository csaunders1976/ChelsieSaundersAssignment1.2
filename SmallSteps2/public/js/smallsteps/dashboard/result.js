var Result = function() {
  
    // ------------------------------------------------------------------------
  
    this.__construct = function() {
        console.log('Result Created');
    };
    
    // ------------------------------------------------------------------------
    
    this.success = function() {
        console.log('success');
    };
    
    // ------------------------------------------------------------------------
    
    this.error = function() {
        console.log('error');
    };
    
    // ------------------------------------------------------------------------
    
    this.__construct();
    
};
