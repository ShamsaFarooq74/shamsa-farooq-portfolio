<?php

namespace Database\Seeders;
use App\Models\Service;
use Illuminate\Database\Seeder;


class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
             [
            'title'=>'UI/UX Design',
            'description'=>'Demonstrated expertise in crafting visually stunning and intuitive user interfaces that captivate and engage users.
            Created visually cohesive designs through careful selection of typography, color schemes, icons, and graphical elements.
            Ensured seamless user experiences by implementing responsive design principles, allowing optimal display across various devices and screen sizes Responsive Design:
            I create designs that adapt seamlessly to different screen sizes and devices, ensuring a consistent and optimized experience across desktop, tablet, and mobile platforms.
            By utilizing responsive design principles and techniques, I ensure that the design remains visually appealing and functional on any device.
            Usability Testing and Iterative Design:
            I conduct usability testing to gather valuable insights and validate design decisions.
            By incorporating user feedback and iterative design processes, I refine and enhance designs to improve usability and overall user satisfaction',
            'images'=>'UlUx.jpg',
            'thumbnail' =>  'UlUx.jpg',
        ],
        [
            'title'=>'Web Development',
            'description'=>'Proficient in both frontend and backend development, with expertise in HTML, CSS, JavaScript, Tailwind and backend languages such as Node.js, React,Laravel/php or Vue.js.
            Successfully delivered end-to-end web solutions, from concept to deployment, ensuring a seamless user experience and robust functionality Skilled in designing and implementing server-side logic, RESTful APIs, and database integration to deliver efficient and scalable web applications Responsive Web Design:I create websites that are optimized for a seamless user experience across different devices and screen sizes.By leveraging responsive design techniques, fluid layouts, and media queries, I ensure that websites adapt and display perfectly on desktop, tablet, and mobile devices.
            Frontend Development:
            I have expertise in frontend technologies such as HTML, CSS, and JavaScript.
            With a keen eye for detail, I transform design mockups into clean and well-structured code, creating visually appealing and interactive user interfaces',
            'images'=>'web-designer.jpg',
            'thumbnail' =>  'web-designer.jpg',
        ],
        [
            'title'=>'Mobile App Development',
            'description'=>'I specialize in creating engaging and user-friendly applications for iOS and Android platforms. With a deep understanding of mobile app development principles and industry best practices, I strive to deliver high-quality solutions that meet the unique needs and preferences of users,I have developed mobile apps that offer intuitive user interfaces, seamless navigation, and visually appealing designs, ensuring a delightful user experience that aligns with the clients brand and vision.Through user research and testing, I gain valuable insights into user behavior, preferences, and pain points, allowing me to design and develop apps that meet their needs and exceed their expectations.I have integrated various APIs and services into mobile apps, including social media integration, payment gateways, location-based services, and push notifications, enhancing functionality and user engagement.By leveraging device-specific features and capabilities, such as camera, GPS, accelerometer, and biometrics, I create mobile apps that offer unique and personalized experiences.I prioritize performance optimization, employing techniques such as code optimization, caching, and image compression to ensure fast loading times, smooth animations, and optimal resource usage.With a focus on security, I implement industry-standard encryption, secure authentication, and data protection measures to safeguard user data and ensure privacy in mobile apps.By following app store guidelines and leveraging App Store Optimization (ASO) techniques, I have successfully launched mobile apps that have gained visibility, increased downloads, and positive user reviews.
             I stay up-to-date with the evolving mobile app landscape, continuously learning and exploring emerging technologies, frameworks, and design patterns to deliver cutting-edge and impactful mobile app solutions',
            'images'=>'mobile-app.jpg',
            'thumbnail'=>'mobile-app.jpg',
        ],
        [
            'title'=>'Content Management Systems (CMS)',
            'description'=>'Customized and extended popular CMS platforms like WordPress, Drupal, or Joomla to build feature-rich web applications.
             Developed custom themes, plugins, or modules to meet specific client requirements and deliver seamless content management experiences.
             I leverage the powerful features of CMS platforms to streamline content creation, editing, and publishing workflows, enabling clients to manage their website content efficiently.With a focus on usability and intuitive interfaces, I design CMS solutions that empower non-technical users to update and maintain their websites easily, reducing their reliance on technical support.I have integrated various third-party systems and APIs into CMS platforms, expanding functionality and allowing seamless integration with e-commerce platforms, payment gateways, social media, and more.I prioritize security in CMS development by implementing best practices such as regular updates, secure authentication, and data encryption, ensuring the protection of sensitive information.Through comprehensive training and documentation, I enable clients to fully leverage the capabilities of their CMS-based websites, empowering them to manage and grow their online presence effectively.By delivering CMS solutions that enhance content management and website maintenance, I have helped businesses achieve increased productivity, improved scalability, and reduced operational costs',
            'images'=>'content-management-system-2.png',
            'thumbnail'=>'content-management-system-2.png',
        ],
        [
            'title'=>'Single-Page Applications (SPA)',
            'description'=>'Developed interactive single-page applications using modern JavaScript frameworks like React, Angular, or Vue.js.
            Implemented dynamic content loading, smooth transitions, and efficient data management for enhanced user engagement and performance.
            By leveraging RESTful APIs and asynchronous data fetching, I ensure that SPAs fetch and display data efficiently, resulting in faster load times and improved user satisfaction.SPAs provide a seamless user experience by dynamically updating content and state, offering smooth transitions and interactive elements that enhance user engagement.I design SPAs with a modular and component-based approach, promoting code reusability, maintainability, and scalability, allowing for easier development and future enhancements.The responsive nature of SPAs enables them to adapt to different devices and screen sizes, ensuring a consistent and optimized experience across desktop, mobile, and tablet platforms.SPAs are well-suited for applications that require real-time updates, such as messaging apps, collaborative tools, or live data dashboards, providing users with instant and up-to-date information.By delivering SPAs that offer a rich and interactive user experience, I have helped businesses enhance customer satisfaction, increase user engagement, and drive conversions.',
            'images'=>'single-page-application.jpg',
            'thumbnail'=>'single-page-application.jpg',
        ],
        [
            'title'=>'Progressive Web Apps (PWA)',
            'description'=>'Developed progressive web applications that combine the best of web and mobile app experiences.
            Utilized service workers, offline capabilities, and push notifications to deliver app-like experiences with fast loading, offline accessibility, and seamless installation.
            PWAs provide a frictionless installation process, allowing users to add the app to their devices home screen with a single tap, eliminating the need for app store downloads and updates.I prioritize security in PWAs by implementing HTTPS, ensuring data privacy, and protecting against security threats, instilling trust and confidence in users.The performance optimization techniques I employ, such as code minification and lazy loading, result in fast load times, reducing bounce rates and enhancing user satisfaction.Through the power of PWAs, businesses can reach a wider audience, increase user engagement, and drive conversions, all while benefiting from the cost-effectiveness and simplicity of web development.My successful delivery of PWAs has resulted in improved user retention, increased conversions, and positive feedback from clients and end-users',
            'images'=>'pwa.jpg',
            'thumbnail'=>'pwa.jpg',
        ],
    ];

 Service::insert($services);
}
}
