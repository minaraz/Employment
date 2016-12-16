  <div id="footer">
    <div class="inner-container">
    <span>&copy; <?php print(date('Y')); ?>, International Student Employment Opportunities.</span>
    </div>
  </div>
  <script type="text/javascript" src="scripts/nav.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script>

    $(document).ready(function() {

      $('.header-search form').on('click', function(e) {

        // If the form (which is turned into the search button) was
        // clicked directly, toggle the visibility of the search box.

        if(e.target == this) {
          $(this).find('input').toggle();
        }

      });
    });

  </script>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.2.3/jquery.min.js"></script>
  <script src="scripts/jquery.tablesorter.pager.js"></script>
  <script src="scripts/main.js"></script>
        <script type="text/javascript" src="js/sKroll.min.js"></script>
        <script type="text/javascript">
            $('#skroll').sKroll({
                fullHeightSection: true
            });
        </script><script type="text/javascript">
  </script>
  </body>
</html>
