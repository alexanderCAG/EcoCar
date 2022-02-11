

// COLOR PICKER

$("input.color").each(function() {
    var that = this;
    $(this).parent().prepend($("<i class='fa fa-paint-brush color-icon'></i>").click(function() {
        that.type = (that.type == "color") ? "text" : "color";
}));
}).change(function() {
    $(this).attr("data-value", this.value);
    this.type = "text";
});

