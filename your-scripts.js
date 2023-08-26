// your-scripts.js
function onGoogleSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    var id = profile.getId();
    var name = profile.getName();
    var email = profile.getEmail();
    
    // You can now use the id, name, and email for your application
    console.log("ID: " + id);
    console.log("Name: " + name);
    console.log("Email: " + email);
  }
  
  // Initialize Google Sign-In on page load
  gapi.load('auth2', function() {
    gapi.auth2.init({
      client_id: 'YOUR_CLIENT_ID.apps.googleusercontent.com',
    });
  });
  