<footer>
    <div class="wrap">
        <div class="flex jcsb ci">
            <div class="one">
                <h1>Quick Links</h1>
                <br>
                <div class="items">
                    <ul>
                        <li><a href="index.php" target="_blank" rel="noopener noreferrer">HomePage</a></li>
                        <li><a href="about.php" target="_blank" rel="noopener noreferrer">About Conference</a></li>
                        <li><a href="abstract.php" target="_blank" rel="noopener noreferrer">Call for Abstract</a></li>
                        <li><a href="regs.php" target="_blank" rel="noopener noreferrer">Registration</a></li>
                        <li><a href="travel.php" target="_blank" rel="noopener noreferrer">Travel Info</a></li>
                        <li><a href="venue.php" target="_blank" rel="noopener noreferrer">Venue</a></li>
                        
                        <li><a href="registration.php" target="_blank" rel="noopener noreferrer">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="two text-center text-white">
                <img style="width: 300px;height: 100px;" src="images/logo.png" alt="">
                
                
            </div>
            <div class="three text-white text-center">
                <h1>Contact Us</h1>
                <br>
                <p class="m-0">Kathmandu University School of Law</p>
                <p>(Conference Secretiat Office)</p>
                <p class="m-0">Phone: <a href="tel:"> 977-11-490735</a></p>
                <!-- <p class="m-0">Mobile: <a href="tel:"> 977-011-415100</a></p> -->
                <p>Email: <a href="mailto: 10thichre@ku.edu.np"> 10thichre@ku.edu.np</a></p>
                <!-- <p class="m-0">Abhishek Jha <a href="tel:"> 977-011-415100</a></p>
                <p class="m-0">Shreeya <a href="tel:"> 977-011-415100</a></p> -->
            </div>
        </div>
    </div>
</footer>

<script>
    function toggleSidebar(){
        let doc=document.querySelector('#sideNavContents');
        let doc1=document.querySelector('#sidenav');

        if(doc1.style.display=='block'){
            doc.classList.remove('animateIn');
            doc.classList.add('animateOut');
            setTimeout(() => {
                doc1.style.display='none';
            }, 250);
        }
        else{
            console.log("here");
            doc1.style.display='block';
            doc.classList.remove('animateOut');
            doc.classList.add('animateIn');            
        }
    }
</script>
</body>
</html>