function addresult(regno,result){
    var studentRef = db.collection('students').doc(regno);
    var setWithMerge = studentRef.set({
        results: result
    }, { merge: true });

}

function addsubjects(subject,regno){
    var studentRef = db.collection('students').doc(regno);//lies

    var setWithMerge = studentRef.set({
        subjects: subject
    }, { merge: true });

}

function getresults(reg){
    var output={};
    db.collection("students").where("regno","==",reg)
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            output[doc.id]=doc.data();
            //console.log(" => ", doc.data());
        });
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });
    return output;
}

function getallresults(school){
    
}