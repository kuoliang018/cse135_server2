# cse135_server2
Code implementation: 
For q1, I create an endpoint ¡°helloworld¡± to display all the information, selecting the color randomly and display real time per the server side.
For q2, I use form to send the request and check the if request matches json or xml, if so print respective msg, else if the response is null or empty I print error msg
For q3, I just print req.headers for nodejs, and print $_SERVER values.
For q4, I have a js file to select methods and set bgclor for body as selected
For q5, I have 2 sessionpages, one for collecting the information, then store them in session, now go to page2 should see the collected information, in page2 I set a button to clear the session now reload the page we see the error msg 
For q7, I create 4 methods create, update, read, delete.
Nodejs POST: using a form to send request and add to the local array I used as database
Nodejs GET: /rest/read/:fullname, using this endpoint to implement GET request. Replacing the ¡°:fullname¡± with the id (Username) to search for the user with such name
Nodejs PUT: /rest/update/:fullname using this endpoint to implement PUT request. Replacing the ¡°:fullname¡± with the id (Username) to search for the user with such name and update the user with the request body data
Nodejs DELETE: /rest/delete/:fullname using this endpoint to implement DELETE request. Replacing the ¡°:fullname¡± with the id (Username) to search for the user with such name and delete  the user with the request body data
PHP post: using form to send post request to add user, id is user¡¯s fullname
PHP get: using form to send get request to add user, id is user¡¯s fullname i.e. find user by name
PHP delete: find user by its fullname then delete it
PHP put: find user by fullname then update it by request

Discussion: 
PHP is much easier to use than nodejs, but more code to write, however, nodejs simplifies the code structure and make it more clear for me to implement requests and endpoints. The interesting part of php is that it can be written with html, while nodejs is a js file. However, nodejs is more clear and cleaner for me.
When using nodejs, it allows me to use one language on both client side and server side, which php doesn¡¯t. PHP also has its own pros, since it allows code and content together to reduce the difficulty of coding. Unfortunately, this just makes my code messy since I am not used to do this. Nodejs in this case is easier to maintain and understand.
Also I feel like php is just a connector between server side and client side, while nodejs is more flexible.
I noticed that php doesn¡¯t use many dependencies as nodejs does, but this is not a problem for me. 
Plan: 
I am planning using nodejs, since it makes my life easier. Installing dependencies and separated from content is fine for me, and I really need the clearness and consistency of nodejs. Using one language on both server-side and client-side makes developing not that intimidating. Another thing is important is that if I need to corporate with my team, using nodejs will surely save our time to make both of us catch up.
