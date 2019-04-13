<?php $this->load->view('common/header.php') ?>
<style>
ul li , ol li{
    color:#fff;
}
</style>

<div class="container course rounded">
        <div class="courseName"> <h1>Course Name : </h1> <h4> Machine learning & Artificial Intelligence</h4>
        <h5 style="color:yellow;">MaLai Club </h5>
        </div>
   
        <a href="<?php echo base_url() ?>index.php/Courses/register" class="btn btn-lg btn-success" value="Register" style="float:right;" >Register</a>
    <div>
    <br>

        <h2>Objective:</h2>
        <ul style="list-style-type:square; " >
            <li>Enable the students to use Machine Learning and Artificial Intelligence
to solve problems.</li>
        </ul>
<br>

        <h2>Outcome:</h2>
        <ul style="list-style-type:square; " >
            <li>Students will be able to apply machine learning and artificial intelligence
algorithms to solve the real world problems.</li>
            
        </ul>
<br>

    <h2>Course Content:</h2>
             <ul style="list-style-type:square; " >
            <li>Basics of Python Programming</li>
            <li>Machine learning : Basic , numpy library , matplotlib library , keras
library.</li>
            <li>Deep learning : Basics , Optimization techniques, Convolution neural
networks (CNN)
</li>
        </ul>
<br>

        <h2>Target Group : </h2> <p>II & III B. Tech I Semester students</p>
<br>

        <h2>Duration :  </h2> <p>12 Hours</p>
<br>

        <h2>Course Coordinator :  </h2> <p> A Obulesh, Asst. Prof. Dept. of CSE</p>
<br>

        <h2>Instructors : </h2>
        <ol type="1">
            <li>Hari Narayana, IV B.Tech CSE</li>
            <li>A Obulesh, Asst. Prof. Dept. of CSE</li>
        </ol>
<br>
        <h2>Industry Partner: </h2> <p>Wave Labs</p>
<br>
       

        </div>
</div>

<?php $this->load->view('common/footer.php') ?>