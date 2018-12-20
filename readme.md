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
 * Visit <http://p4.caloggero.me/login>
 * Log in as user jill@harvard.edu or jamal@harvard.edu
 * OR, Visit <http://p4.caloggero.me/register>
 * Register new account
 * After user is authenticated, visit <http://p4.caloggero.me/threads/new>
 * Fill out form
 * Press Submit
 * You will be redirected to new thread and will see a confirmation message
 
__Read__
 * Visit <http://p4.caloggero.me/threads/list> to see a list of all the threads

__Update__
 * While logged in as a user, visit <http://p4.caloggero.me/threads/1>
 * Next to the comments of the user you are signed in as, there should be an edit link for that comment
 * Click link to edit a comment. Users can only edit their own comments
 * Make a change to the comment
 * Click Save
 * Observe confirmation message
 
__Delete__
 * Visit <http://p4.caloggero.me/threads/1> and click on Delete link next to a comment
 * Confirm deletion
 * Observe confirmation message
 
## Outside Resources
 * I used my notes and resources from an EdX course, Advanced CSS Concepts, to design some custom CSS for a grid layout, as well as style organization.
 * Color picker
 * Google Fonts
 
## Code Style Divergences


## Notes for instructor
 * I used examples from the Issues Forum on github as sample text for threads and comments  
  