# P4: Web Forum
By: *Alex Caloggero*
Production URL: <http://p4.caloggero.me>

## Database

Primary tables:
 * `threads`
 * `comments`
 * `roles`
 * `users`
 
Pivot table
 * `role_user`
 
## CRUD

__Create__
 * Log in as jill@harvard.edu if that user is not already logged in.
 * Visit <http://p4.caloggero.me/login> to log in as jill@harvard.edu
 * Visit <http://p4.caloggero.me/threads/new>
 * Fill out form fields
 * Press Submit
 * You will be redirected to new thread and will see a confirmation message
 
__Read__
 * Visit <http://p4.caloggero.me/threads/list> to see a list of all the threads
 * You can click on a thread and view the text and any comments to the thread

__Update__
 * While logged in as jill@harvard.edu, visit <http://p4.caloggero.me/threads/2>
 * Click the Edit link on the right side of jill's comment. 
 * Make a change to the comment
 * Click Save
 * Observe confirmation message
 
__Delete__
 * Visit <http://p4.caloggero.me/threads/2> and click on Delete link next to a comment
 * Confirm deletion
 * Observe confirmation message
 
## Outside Resources
 * I used my notes and resources from an EdX course, [Advanced CSS Concepts](https://www.edx.org/course/advanced-css-concepts-2), to design some custom CSS for a grid layout, as well as style organization.
 * [HTML Color Picker](https://htmlcolorcodes.com/)
 * [Google Fonts](https://fonts.google.com/)
 * [HTML Elements Reference](https://developer.mozilla.org/en-US/docs/Web/HTML/Element)
 * [stackoverflow: Storing data in eloquent relationships](https://stackoverflow.com/questions/32522918/laravel-5-1-store-data-in-eloquent-relationships)
 
## Code Style Divergences
 * None

## Notes for instructor
 * I used random samples from the Issues Forum on github as sample text for threads and comments
 * The user Jill Harvard is seeded with the user role admin which gives her the ability to edit or delete threads. Regular members can only edit or delete their own comments.

  