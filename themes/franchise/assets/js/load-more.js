'use strict'

// Load button
const loadMoreButton = document.querySelector('.load-more-button');
// Container for posts
const franchisePosts = document.querySelector('.franchise-posts');

// Listen to click event 
loadMoreButton.addEventListener('click', loadMore);

function loadMore() {
    // Change button text when loading
    loadMoreButton.innerHTML = 'Loading...';

    // Instantiate object
    var xhr = new XMLHttpRequest();
    var ajaxscript = { ajax_url : 'http://localhost:8000/wp-admin/admin-ajax.php' }

    xhr.open('POST', ajaxscript.ajax_url, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded;');
    
    // Access methods from object
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) { 
            // Change button text
            loadMoreButton.innerHTML = 'Load More';
            // Insert new posts
            franchisePosts.insertAdjacentHTML('beforeend', xhr.response);
            // Increment pagination
            current_page_franchise++;
            // Hide button if no more posts
            if ( current_page_franchise == max_page_franchise ){
                loadMoreButton.style.display = 'none';
            }
        } else {
            console.log(this.status);
        }
    };

    xhr.send( 'action=loadmore&query=' + posts_franchise + '&page=' + current_page_franchise );
    
};   