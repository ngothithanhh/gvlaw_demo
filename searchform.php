<form role="search"
      method="get"
      class="search-form"
      action="<?php echo esc_url(home_url('/')); ?>">

    <div class="search-wrapper">

        <input
            id="live-search"
            type="search"
            class="search-field"
            placeholder="Search..."
            value="<?php echo get_search_query(); ?>"
            name="s"
            aria-label="Search">

        <button type="submit" class="search-submit">

            <svg xmlns="http://www.w3.org/2000/svg"
                 width="18"
                 height="18"
                 viewBox="0 0 24 24"
                 fill="none"
                 stroke="currentColor"
                 stroke-width="2">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>

        </button>

        <div id="search-results"></div>


    </div>

    

</form>