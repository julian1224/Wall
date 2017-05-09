<div id="loginbox" style="height:auto;">
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <input type="text" name="searchterm" placeholder="Search?"/>
      <input type="submit" name="submit_search" value="Search." />
  </form>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <select name="sortform">
          <option value="date_desc"> Sort by date, descending</option>
          <option value="date_asc"> Sort by date, ascending</option>
          <option value="name_desc"> Sort by user, descending</option>
          <option value="name_asc"> Sort by user, ascending</option>
          <option value="sort_random"> R A N D O M </option>
        </select>
          <input type="submit" name="submit_sort" value="Sort." />
  </form>
</div>
