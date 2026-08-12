<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>


<style>

/* =========================
   ABOUT PAGE
========================= */

.about-page {
    background: #f8fafc;
}


/* =========================
   ABOUT HERO
========================= */

.about-hero {
    padding: 80px 20px;

    background:
        linear-gradient(
            135deg,
            #0f172a,
            #1e3a8a
        );

    color: white;

    text-align: center;
}


.about-hero h1 {
    font-size: 48px;
    margin-bottom: 15px;
}


.about-hero h1 span {
    color: #38bdf8;
}


.about-hero p {
    max-width: 700px;
    margin: auto;

    color: #dbeafe;

    font-size: 17px;
    line-height: 1.7;
}


/* =========================
   ABOUT INTRO
========================= */

.about-intro {
    padding: 80px 20px;

    background: white;
}


.about-container {
    max-width: 1100px;

    margin: auto;
}


.about-intro-content {
    display: grid;

    grid-template-columns: 1fr 1.5fr;

    align-items: center;

    gap: 60px;
}


/* =========================
   PROFILE CARD
========================= */

.about-profile {
    background: #f8fafc;

    border: 1px solid #e2e8f0;

    border-radius: 18px;

    padding: 40px 25px;

    text-align: center;

    box-shadow:
        0 10px 30px rgba(0,0,0,0.05);
}


.profile-circle {
    width: 130px;
    height: 130px;

    margin: 0 auto 20px;

    border-radius: 50%;

    background:
        linear-gradient(
            135deg,
            #2563eb,
            #06b6d4
        );

    display: flex;

    align-items: center;
    justify-content: center;

    color: white;

    font-size: 48px;

    font-weight: 800;
}


.about-profile h2 {
    color: #111827;

    font-size: 25px;

    margin-bottom: 8px;
}


.about-profile .role {
    color: #2563eb;

    font-size: 15px;

    font-weight: 700;
}


/* =========================
   INTRO TEXT
========================= */

.about-text h2 {
    color: #111827;

    font-size: 36px;

    margin-bottom: 18px;
}


.about-text h2 span {
    color: #2563eb;
}


.about-text p {
    color: #64748b;

    font-size: 16px;

    line-height: 1.9;

    margin-bottom: 15px;
}


/* =========================
   INFO CARDS
========================= */

.about-details {
    padding: 80px 20px;

    background: #f8fafc;
}


.details-title {
    text-align: center;

    margin-bottom: 45px;
}


.details-title h2 {
    font-size: 35px;

    color: #111827;

    margin-bottom: 10px;
}


.details-title p {
    color: #64748b;
}


.details-grid {
    display: grid;

    grid-template-columns:
        repeat(3, 1fr);

    gap: 25px;
}


.detail-card {
    background: white;

    border: 1px solid #e2e8f0;

    border-radius: 14px;

    padding: 30px 25px;

    transition: 0.3s;
}


.detail-card:hover {
    transform: translateY(-6px);

    box-shadow:
        0 15px 30px rgba(0,0,0,0.07);

    border-color: #bfdbfe;
}


.detail-icon {
    width: 55px;
    height: 55px;

    background: #eff6ff;

    border-radius: 12px;

    display: flex;

    align-items: center;
    justify-content: center;

    font-size: 27px;

    margin-bottom: 18px;
}


.detail-card h3 {
    color: #111827;

    font-size: 20px;

    margin-bottom: 10px;
}


.detail-card p {
    color: #64748b;

    font-size: 14px;

    line-height: 1.7;
}


/* =========================
   WEB DEVELOPMENT
========================= */

.learning-section {
    padding: 80px 20px;

    background: white;
}


.learning-content {
    max-width: 900px;

    margin: auto;

    text-align: center;
}


.learning-content h2 {
    color: #111827;

    font-size: 36px;

    margin-bottom: 15px;
}


.learning-content h2 span {
    color: #2563eb;
}


.learning-content > p {
    color: #64748b;

    font-size: 16px;

    line-height: 1.8;

    margin-bottom: 35px;
}


.skills {
    display: flex;

    justify-content: center;

    flex-wrap: wrap;

    gap: 12px;
}


.skill {
    padding: 10px 18px;

    background: #eff6ff;

    color: #2563eb;

    border: 1px solid #dbeafe;

    border-radius: 25px;

    font-size: 14px;

    font-weight: 700;
}


/* =========================
   JOURNEY
========================= */

.journey {
    padding: 80px 20px;

    background: #f8fafc;
}


.journey-content {
    max-width: 850px;

    margin: auto;
}


.journey-content h2 {
    text-align: center;

    color: #111827;

    font-size: 35px;

    margin-bottom: 40px;
}


.journey-item {
    background: white;

    padding: 25px;

    border-left: 4px solid #2563eb;

    border-radius: 8px;

    margin-bottom: 20px;

    box-shadow:
        0 5px 20px rgba(0,0,0,0.04);
}


.journey-item h3 {
    color: #111827;

    font-size: 19px;

    margin-bottom: 8px;
}


.journey-item p {
    color: #64748b;

    font-size: 14px;

    line-height: 1.7;
}


/* =========================
   CTA
========================= */

.about-cta {
    padding: 75px 20px;

    background: #2563eb;

    color: white;

    text-align: center;
}


.about-cta h2 {
    font-size: 36px;

    margin-bottom: 12px;
}


.about-cta p {
    max-width: 650px;

    margin: 0 auto 25px;

    color: #dbeafe;

    line-height: 1.7;
}


.about-cta a {
    display: inline-block;

    padding: 13px 25px;

    background: white;

    color: #2563eb;

    border-radius: 8px;

    font-weight: 700;

    transition: 0.3s;
}


.about-cta a:hover {
    transform: translateY(-2px);

    box-shadow:
        0 8px 20px rgba(0,0,0,0.15);
}


/* =========================
   TABLET
========================= */

@media (max-width: 900px) {

    .about-intro-content {
        grid-template-columns: 1fr;

        gap: 40px;
    }


    .about-profile {
        max-width: 450px;

        margin: auto;
    }


    .details-grid {
        grid-template-columns:
            repeat(2, 1fr);
    }


    .about-hero h1 {
        font-size: 40px;
    }

}


/* =========================
   MOBILE
========================= */

@media (max-width: 600px) {

    .about-hero {
        padding: 60px 20px;
    }


    .about-hero h1 {
        font-size: 34px;
    }


    .about-hero p {
        font-size: 15px;
    }


    .about-text h2 {
        font-size: 29px;
    }


    .details-grid {
        grid-template-columns: 1fr;
    }


    .details-title h2 {
        font-size: 29px;
    }


    .learning-content h2 {
        font-size: 29px;
    }


    .journey-content h2 {
        font-size: 29px;
    }


    .about-cta h2 {
        font-size: 29px;
    }

}

</style>



<div class="about-page">


<!-- =========================
     ABOUT HERO
========================= -->

<section class="about-hero">

    <h1>
        About <span>RAFEH TECH</span>
    </h1>

    <p>
        Get to know the person behind RAFEH TECH
        and learn about my journey into web development
        and technology.
    </p>

</section>



<!-- =========================
     INTRO
========================= -->

<section class="about-intro">

    <div class="about-container">

        <div class="about-intro-content">


            <!-- PROFILE -->

            <div class="about-profile">

                <div class="profile-circle">
                    RS
                </div>

                <h2>
                    Rafeh Shah
                </h2>

                <div class="role">
                    Web Development Student
                </div>

            </div>



            <!-- ABOUT TEXT -->

            <div class="about-text">

                <h2>
                    Hello, I'm <span>Rafeh Shah</span>
                </h2>

                <p>
                    My name is Rafeh Shah. I am 17 years old
                    and I am currently a college student.
                    Along with my college education, I am
                    learning web development and working
                    to improve my technical skills.
                </p>

                <p>
                    I am studying web development at
                    <strong>CIMT Academy</strong>, where I am
                    learning how websites are designed,
                    developed and made responsive for
                    different devices.
                </p>

                <p>
                    RAFEH TECH is a project that I created
                    as part of my learning journey. The website
                    focuses on laptops, mobile phones, tablets
                    and modern technology.
                </p>

            </div>


        </div>

    </div>

</section>



<!-- =========================
     PERSONAL DETAILS
========================= -->

<section class="about-details">

    <div class="about-container">


        <div class="details-title">

            <h2>
                My Information
            </h2>

            <p>
                A little more about me and what I am learning.
            </p>

        </div>



        <div class="details-grid">


            <!-- AGE -->

            <div class="detail-card">

                <div class="detail-icon">
                    👤
                </div>

                <h3>
                    About Me
                </h3>

                <p>
                    My name is Rafeh Shah and I am
                    17 years old. I am interested in
                    technology and web development.
                </p>

            </div>



            <!-- EDUCATION -->

            <div class="detail-card">

                <div class="detail-icon">
                    🎓
                </div>

                <h3>
                    College Student
                </h3>

                <p>
                    I am currently studying in college
                    while developing my technical and
                    web development skills.
                </p>

            </div>



            <!-- ACADEMY -->

            <div class="detail-card">

                <div class="detail-icon">
                    💻
                </div>

                <h3>
                    CIMT Academy
                </h3>

                <p>
                    I am learning web development at
                    CIMT Academy and practicing my skills
                    through different website projects.
                </p>

            </div>


        </div>

    </div>

</section>



<!-- =========================
     WEB DEVELOPMENT
========================= -->

<section class="learning-section">

    <div class="learning-content">

        <h2>
            My <span>Web Development</span> Journey
        </h2>

        <p>
            I am currently learning web development and
            building projects to improve my understanding
            of website design and development. My goal is
            to continue learning, practice regularly and
            become a skilled web developer in the future.
        </p>


        <div class="skills">

            <span class="skill">
                HTML
            </span>

            <span class="skill">
                CSS
            </span>

            <span class="skill">
                JavaScript
            </span>

            <span class="skill">
                Responsive Design
            </span>

            <span class="skill">
                WordPress
            </span>

            <span class="skill">
                Custom Themes
            </span>

        </div>

    </div>

</section>



<!-- =========================
     MY JOURNEY
========================= -->

<section class="journey">

    <div class="journey-content">

        <h2>
            My Learning Journey
        </h2>


        <div class="journey-item">

            <h3>
                🎓 College Education
            </h3>

            <p>
                I am continuing my college education
                while also spending time learning
                technology and web development.
            </p>

        </div>


        <div class="journey-item">

            <h3>
                💻 Learning Web Development
            </h3>

            <p>
                I am learning web development at
                CIMT Academy and practicing by creating
                different websites and custom WordPress themes.
            </p>

        </div>


        <div class="journey-item">

            <h3>
                🚀 Building Projects
            </h3>

            <p>
                Creating projects such as RAFEH TECH
                helps me understand how real websites
                are structured, designed and developed.
            </p>

        </div>


        <div class="journey-item">

            <h3>
                🌟 Future Goal
            </h3>

            <p>
                My goal is to keep improving my skills,
                learn new technologies and become a
                professional web developer.
            </p>

        </div>


    </div>

</section>



<!-- =========================
     CTA
========================= -->

<section class="about-cta">

    <h2>
        Thanks For Visiting RAFEH TECH
    </h2>

    <p>
        This website represents my learning journey
        in web development. I hope to continue improving
        it as I learn new skills and technologies.
    </p>

    <a href="/contact/">
        Contact Me
    </a>

</section>


</div>


<?php get_footer(); ?>
