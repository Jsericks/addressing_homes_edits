jQuery(function(){
  // tumblr_api_read variable is set from the blogs.html include

  // Get the blog_entries div and create necessarcy disembodieds
  var $blog_container = $(".blog_entries");

  var post_count = tumblr_api_read["posts"].length;

  $.each(tumblr_api_read["posts"],function(i){
    var counter = i + 1;
    var cont_one = [1,3,5,6,7,8,10,12];
    // Disembodied elements for the loop
    var $clearfix_two = $('<div class="clearfix visible-sm-block hidden-md hidden-lg"></div>');
    var $clearfix_three = $('<div class="clearfix visible-md-block hidden-xs hidden-sm hidden-lg"></div>');
    var $blog_entry_container_one = $('<div class="col-sm-6 col-md-4 blog_entry_container one"></div>');
    var $blog_entry_container_two = $('<div class="col-sm-6 col-md-4 blog_entry_container two"></div>');
    var $row = $('<div class="row blog_sub"></div>');
    var $cols = $('<div class="col-sm-12"></div>');
    var $title = $('<h6></h6>');
    var $title_arrow = $('<img class="img-responsive pull-right" src="images/arrow-white.png" alt="arrow right">');
    var $disp_blurb = $('<p></p>');
    var $blog_link = $('<a href="#"></a>');
    var link = "blog.php?id=" + i;
    var selected = '';

    // Tumblr content
    var $post_content = $.parseHTML(tumblr_api_read["posts"][i]["regular-body"])[0]["innerText"];
    var $blurb = $post_content.substr(0, 174) + "...";
    var $blog_title = tumblr_api_read["posts"][i]["regular-title"];

    // insert values into partials
    $title.text($blog_title);
    $disp_blurb.text($blurb);
    $blog_link.attr("href",link);
    console.log($blog_link);

    if ($.inArray(counter, cont_one) !== -1) {
      selected = $blog_entry_container_one;

      $title.append($title_arrow);
      $cols.append($title);
      $row.append($cols);
      $blog_link.append($row);

      selected.append($blog_link);
    } else {
      selected = $blog_entry_container_two;
      $blog_link.append($title);
      selected.append($blog_link);
      selected.append($disp_blurb);
    }

    $blog_container.append(selected);
    if ( ( counter % 6 ) == 0 ) {
      $blog_container.append($clearfix_two);
      $blog_container.append($clearfix_three);
    } else if ( ( counter % 2 ) == 0 ) {
      $blog_container.append($clearfix_two);
    } else if ( ( counter % 3 ) == 0 ) {
      $blog_container.append($clearfix_three);
    }
  });
  
}());