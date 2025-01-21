<?php
namespace Database\Seeders;
use App\Models\JobListing;
use App\Models\User;
use Illuminate\Database\Seeder;
class JobListingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $job_listings = [
            [
                "title" => "Software Engineer",
                "description" => "As a Software Engineer at Algorix, you will be responsible for designing, developing, and maintaining high-quality software applications. You will work closely with cross-functional teams to deliver scalable and efficient solutions that meet business needs. The role involves writing clean, maintainable code, participating in code reviews, and staying current with industry trends to ensure our technology stack remains cutting-edge.",
                "salary" => 90000,
                "tags" => "development,coding,java,python",
                "job_type" => "Full time",
                "remote" => false,
                "requirements" => "Bachelors degree in Computer Science or related field, 3+ years of software development experience",
                "benefits" => "Healthcare, 401(k) matching, flexible work hours",
                "address" => "123 Main St",
                "city" => "Albany",
                "state" => "NY",
                "zipcode" => "12201",
                "contact_email" => "info@algorix.com",
                "contact_phone" => "348-334-3949",
                "company_name" => "Algorix",
                "company_description" => "Algorix is a leading tech firm specializing in innovative software solutions and cutting-edge technology.",
                "company_website" => "https://algorix.com",
                "company_logo" => "logo-algorix.png"
            ],
            [
                "title" => "Marketing Specialist",
                "description" => "Bitwave is seeking a creative and strategic Marketing Specialist to develop and execute comprehensive marketing campaigns. In this role, you will be responsible for market research, identifying target audiences, and crafting compelling messages to drive brand awareness and engagement. You'll work closely with the sales and product teams to align marketing strategies with business goals and analyze campaign performance to optimize results.",
                "salary" => 70000,
                "tags" => "marketing,advertising",
                "job_type" => "Full time",
                "remote" => true,
                "requirements" => "Bachelors degree in Marketing or related field, experience in digital marketing",
                "benefits" => "Health and dental insurance, paid time off, remote work options",
                "address" => "456 Market St",
                "city" => "San Francisco",
                "state" => "CA",
                "zipcode" => "94105",
                "contact_email" => "info@bitwave.com",
                "contact_phone" => "454-344-3344",
                "company_name" => "Bitwave",
                "company_description" => "Bitwave is a dynamic marketing agency focused on delivering innovative marketing strategies and results-driven solutions.",
                "company_website" => "https://bitwave.com",
                "company_logo" => "logo-bitwave.png"
            ],
            [
                "title" => "Web Developer",
                "description" => "At NextGen Solutions, our Web Developer will be crucial in building and maintaining exceptional web applications that delight users and meet business objectives. You will be involved in the full development lifecycle, including design, coding, testing, and deployment. The role requires expertise in front-end technologies such as HTML, CSS, and JavaScript, as well as experience with back-end systems to create dynamic and responsive web solutions.",
                "salary" => 85000,
                "tags" => "web development,programming",
                "job_type" => "Part time",
                "remote" => false,
                "requirements" => "Bachelors degree in Computer Science or related field, proficiency in HTML, CSS, JavaScript",
                "benefits" => "Competitive salary, professional development opportunities, friendly work environment",
                "address" => "789 Web Ave",
                "city" => "Chicago",
                "state" => "IL",
                "zipcode" => "60607",
                "contact_email" => "info@nextgensolutions.com",
                "contact_phone" => "456-876-5432",
                "company_name" => "NextGen Solutions",
                "company_description" => "NextGen Solutions is a forward-thinking technology company dedicated to crafting exceptional web applications and solutions.",
                "company_website" => "https://nextgensolutions.com",
                "company_logo" => "logo-nextgen.png"
            ],
            [
                "title" => "Data Analyst",
                "description" => "Quantum Code is in search of a Data Analyst to join our team and transform complex data into actionable insights. You will utilize various analytical tools and techniques to interpret data, identify trends, and provide strategic recommendations. Your role will involve working closely with stakeholders to understand their data needs, delivering detailed reports, and contributing to data-driven decision-making processes to support the company’s objectives.",
                "salary" => 75000,
                "tags" => "data analysis,statistics",
                "job_type" => "Full time",
                "remote" => false,
                "requirements" => "Bachelors degree in Data Science or related field, strong analytical skills",
                "benefits" => "Health benefits, remote work options, casual dress code",
                "address" => "101 Data St",
                "city" => "Chicago",
                "state" => "IL",
                "zipcode" => "60616",
                "contact_email" => "info@quantumcode.com",
                "contact_phone" => "444-555-5555",
                "company_name" => "Quantum Code",
                "company_description" => "Quantum Code is a prominent data analytics company providing insightful data solutions and analytics for better decision-making.",
                "company_website" => "https://quantumcode.com",
                "company_logo" => "logo-quantumcode.png"
            ],
            [
                "title" => "Graphic Designer",
                "description" => "As a Graphic Designer at Shield, you will be at the forefront of our creative projects, working on diverse design tasks that range from branding and advertising to digital and print media. You will be responsible for creating visually compelling designs that effectively communicate our brand message and captivate our audience. Collaboration with other creative professionals and the ability to take a concept from idea to execution will be key to your success.",
                "salary" => 70000,
                "tags" => "graphic design,creative",
                "job_type" => "Full time",
                "remote" => false,
                "requirements" => "Bachelors degree in Graphic Design or related field, proficiency in Adobe Creative Suite",
                "benefits" => "Flexible work hours, creative work environment, opportunities for growth",
                "address" => "234 Design Blvd",
                "city" => "Albany",
                "state" => "NY",
                "zipcode" => "12203",
                "contact_email" => "info@shield.com",
                "contact_phone" => "499-321-9876",
                "company_name" => "Shield",
                "company_description" => "Shield is a leading design agency known for its innovative approach to graphic design and creative solutions.",
                "company_website" => "https://shield.com",
                "company_logo" => "logo-shield.png"
            ],
            [
                "title" => "Data Scientist",
                "description" => "Join Sparkle as a Data Scientist and play a pivotal role in analyzing and interpreting complex datasets to derive meaningful insights. You will be responsible for building predictive models, implementing machine learning algorithms, and applying statistical techniques to solve real-world problems. Collaboration with cross-functional teams to integrate data-driven solutions into business strategies and products will be a key part of your role.",
                "salary" => 100000,
                "tags" => "data science,machine learning",
                "job_type" => "Full time",
                "remote" => true,
                "requirements" => "Masters or Ph.D. in Data Science or related field, experience with machine learning algorithms",
                "benefits" => "Competitive salary, remote work options, professional development",
                "address" => "567 Data Drive",
                "city" => "Boston",
                "state" => "MA",
                "zipcode" => "02108",
                "contact_email" => "info@sparkle.com",
                "contact_phone" => "684-789-1234",
                "company_name" => "Sparkle",
                "company_description" => "Sparkle is an innovative company specializing in data science and machine learning, committed to solving complex data problems.",
                "company_website" => "https://sparkle.com",
                "company_logo" => "logo-sparkle.png"
            ],
            [
                "title" => "UX Designer",
                "description" => "Vencom is seeking a UX Designer to enhance our user experience through intuitive and engaging design solutions. You will conduct user research, create wireframes and prototypes, and collaborate with developers and product managers to implement design improvements. Your focus will be on understanding user needs and ensuring our products are both functional and aesthetically pleasing.",
                "salary" => 80000,
                "tags" => "UX design,user research",
                "job_type" => "Full time",
                "remote" => false,
                "requirements" => "Bachelors degree in UX Design or related field, experience with design tools like Sketch or Figma",
                "benefits" => "Health insurance, collaborative work environment, growth opportunities",
                "address" => "890 UX Rd",
                "city" => "Seattle",
                "state" => "WA",
                "zipcode" => "98101",
                "contact_email" => "info@vencom.com",
                "contact_phone" => "567-890-1234",
                "company_name" => "Vencom",
                "company_description" => "Vencom is a design-driven company focused on creating exceptional user experiences through innovative UX design.",
                "company_website" => "https://vencom.com",
                "company_logo" => "logo-vencom.png"
            ],
            [
                "title" => "Digital Media Specialist",
                "description" => "Digital Media is seeking a Digital Media Specialist to manage and enhance our online presence. You will be responsible for creating and implementing digital marketing strategies, analyzing web traffic and engagement metrics, and optimizing our digital content to maximize reach and effectiveness. Your role will involve collaboration with the content and design teams to ensure cohesive and impactful digital campaigns.",
                "salary" => 75000,
                "tags" => "digital marketing,SEO,analytics",
                "job_type" => "Full time",
                "remote" => true,
                "requirements" => "Bachelors degree in Marketing, Communications, or related field, experience with digital marketing tools",
                "benefits" => "Remote work options, health insurance, professional growth opportunities",
                "address" => "101 Digital Way",
                "city" => "Austin",
                "state" => "TX",
                "zipcode" => "73301",
                "contact_email" => "info@digitalmedia.com",
                "contact_phone" => "512-555-1234",
                "company_name" => "Digital Media",
                "company_description" => "Digital Media specializes in innovative online marketing strategies and digital content management.",
                "company_website" => "https://digitalmedia.com",
                "company_logo" => "logo-digital-media.png"
            ],
            [
                "title" => "Product Manager",
                "description" => "Pink Pig is searching for a Product Manager to lead the development and enhancement of our tech products. You will work closely with engineering, design, and marketing teams to define product vision, create roadmaps, and deliver high-quality products that meet customer needs. Your role involves gathering and prioritizing product requirements, overseeing project timelines, and ensuring successful product launches.",
                "salary" => 90000,
                "tags" => "product management,tech",
                "job_type" => "Full time",
                "remote" => false,
                "requirements" => "Bachelors degree in Business or Engineering, experience in product management",
                "benefits" => "Health benefits, competitive salary, growth opportunities",
                "address" => "234 Innovation Ln",
                "city" => "New York",
                "state" => "NY",
                "zipcode" => "10001",
                "contact_email" => "info@pinkpig.com",
                "contact_phone" => "212-555-6789",
                "company_name" => "Pink Pig",
                "company_description" => "Pink Pig is a technology company dedicated to creating innovative products and solutions that drive industry advancement.",
                "company_website" => "https://pinkpig.com",
                "company_logo" => "logo-pink-pig.png"
            ],
            [
                "title" => "IT Support Specialist",
                "description" => "Tec Solutions is hiring an IT Support Specialist to provide technical assistance and support to our clients. You will troubleshoot hardware and software issues, assist with network and system configurations, and ensure the smooth operation of IT infrastructure. Your role involves responding to support requests, documenting issues, and collaborating with the technical team to implement solutions.",
                "salary" => 65000,
                "tags" => "IT support,networking",
                "job_type" => "Full time",
                "remote" => false,
                "requirements" => "Associate's degree in IT or related field, experience in technical support",
                "benefits" => "Health insurance, retirement plan, opportunities for career advancement",
                "address" => "567 Tech Blvd",
                "city" => "Dallas",
                "state" => "TX",
                "zipcode" => "75201",
                "contact_email" => "info@tecsolutions.com",
                "contact_phone" => "214-555-9876",
                "company_name" => "Tec Solutions",
                "company_description" => "Tec Solutions provides comprehensive IT support and solutions, ensuring optimal performance of technology infrastructure.",
                "company_website" => "https://tecsolutions.com",
                "company_logo" => "logo-tec-solutions.png"
            ]
        ];
        $users_id = User::pluck('id')->toArray();
        foreach ($job_listings as $job) {
            $job['user_id'] = $users_id[array_rand($users_id)];
            $job['created_at'] = now();
            $job['updated_at'] = now();
            JobListing::create($job);
        }
        echo "Job listings seeded successfully.\n";
    }
}
