
var uname= document.getElementById("uname");
var pass= document.getElementById("pass");

// var users=db.collection('users');

function logout(){
    firebase.auth().signOut().then(function() {
     alert('signed out');
    }).catch(function(error) {
        alert('error');
    });
}


function login(){
    var uname= document.getElementById("uname").value;
    var pass= document.getElementById("pass").value;
    //function log(){alert(uname);};
    // var users=db.collection('users');
    // var querry =users.where("username","==","admin");
    // console.log(querry.data());
    firebase.auth().signInWithEmailAndPassword(uname, pass).catch(function(error) {

        var errorCode = error.code;
        var errorMessage = error.message;
        alert('Error :' + errorCode+ errorMessage);
    });

};



function getuserdata(){
    var user = firebase.auth().currentUser;
    var name, email, uid, emailVerified;

    if (user != null) {
    name = user.displayName;
    email = user.email;
    uid = user.uid; //get user id and match the record and direct to the specific land page then retireve the data relavent to that user 
    }
    var type;
    var userdata=db.collection("users").where("userid", "==", uid);
    userdata.get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            // doc.data() is never undefined for query doc snapshots
             type=doc.data().type;
             console.log(type);    

        });
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });
    // if (type=='admin'){
    //     <?php ?>
    // }
    // else if (type=='teacher'){
    //     <?php ?>
    // }
    // else{
    //     <?php ?>
    // }

}
