<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="NT Education offers tutorials on Java, JavaScript, Python, HTML, CSS, and Digital Marketing. Join us to master these skills!">
    <meta name="keywords" content="Java, Python, HTML, CSS, Digital Marketing, Tutorials, NT Education">
    <title>Tutorial - NT Education</title>
    <link rel="stylesheet" href="../CSS/tutorial.css">
    <link rel="stylesheet" href="../CSS/header.css">
    <link rel="stylesheet" href="../CSS/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

</head>

<body>

    <header>
        <div class="container">
            <div class="scroll-container">
                <div class="logo-scroll">
                    <h1>NT Education</h1>
                    <h1>NAMASTE TECH</h1>
                </div>
            </div>

            <div class="opening-hours">
                <i class="far fa-clock"></i>
                <div>
                    Monday - Saturday
                    <div>8:00 Am - 8:00 Pm</div>
                </div>
            </div>
            <div class="contact-info">
                <i class="fas fa-phone"></i>
                <div>
                    Call us
                    <div>+91 9351733774</div>
                </div>
            </div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>

        <div class="hamburger-get-certificate">
            <div class="hamburger-get-certificate-container">
                <a href="#" class="ham-get-certificate">
                    <span class="left-line"></span>Get Certificate
                </a>
            </div>
            <div class="hamburger" id="hamburger">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <nav class="nav-container" id="nav-container">
            <ul class="nav-links">
                <li><a href="../index.php">Home</a></li>
                <li><a href="./all-courses.php">All Courses</a></li>
                <li><a href="./tutorial.php" class="active">Tutorial</a></li>
                <li><a href="./about-us.php">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Login</a></li>
                <li class="get-certificate-container">
                    <a href="#" class="get-certificate">
                        <span class="left-line"></span>Get Certificate
                    </a>
                </li>
            </ul>
        </nav>



    </header>

    <div class="background-image">
        <div class="background-text">
            <h1>Welcome to Namaste-Tech <br> Tutorials</h1>
        </div>
    </div>

    <section class="banner">
        <div class="banner-content">
            <nav class="course-menu">
                <h2>Select a Course</h2>
                <ul id="course-list">
                    <li><a href="javascript:void(0);" onclick="loadCourse('java')">Java</a></li>
                    <li><a href="javascript:void(0);" onclick="loadCourse('javascript')">JavaScript</a></li>
                    <li><a href="javascript:void(0);" onclick="loadCourse('python')">Python</a></li>
                    <li><a href="javascript:void(0);" onclick="loadCourse('html')">HTML</a></li>
                    <li><a href="javascript:void(0);" onclick="loadCourse('css')">CSS</a></li>
                    <li><a href="javascript:void(0);" onclick="loadCourse('digital_marketing')">Digital Marketing</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <div class="tutorial-container">
        <aside id="course-sidebar" class="sidebar">
            <h3>Java Topics</h3>
            <ul id="course-topics"></ul>
        </aside>

        <main class="main-content">
            <h2 id="topic-title">Select a Topic to Learn More</h2>
            <div id="loading-spinner" style="display: none;">Loading...</div>
            <div id="topic-description"></div>
        </main>

        <aside class="advertisement">
            <h3>Sponsored Ads</h3>
            <div class="ads-container">
                <img src="ad1.jpg" alt="Ad 1">
                <img src="ad2.jpg" alt="Ad 2">
            </div>
        </aside>
    </div>








    <footer class="footer">
        <div class="footer-container">
            <div class="footer-row">
                <div class="footer-column about">
                    <h4>About Us</h4>
                    <p>
                        NT Education is a leading platform providing top-quality educational resources to empower
                        learners worldwide. Join us today and take a step toward your future success!
                    </p>
                    <div class="footer-social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="footer-column links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="./all-courses.php">Courses</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>

                <div class="footer-column links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="./privacy-policy.php">Privacy Policy</a></li>
                        <li><a href="./tutorial.php">Terms & Conditions</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Support</a></li>
                    </ul>
                </div>

                <div class="footer-column footer-contact-us">
                    <h4>Contact Us</h4>
                    <div class="footer-contact-info">
                        <p><i class="fas fa-phone"></i> +91 9351733774</p>
                        <p><i class="fas fa-envelope"></i> hemant505gautam@gmail.com</p>
                        <p><i class="fas fa-map-marker-alt"></i> 123 Main VDN, Jaipur, Raj.</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 NT Education. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="../JS/hamburger.js"></script>

    <script>
        const courses = {
            java: {
                name: "Java Topics",
                topics: {
                    "Introduction to Java": "Java is a high-level, class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible. It is widely used for building enterprise-level applications.",
                    "Basic Concepts": [
                        "Syntax and Structure: Understanding Java syntax, basic structure (class, method, main function).",
                        "Data Types: Primitive data types (int, float, char, boolean) and non-primitive types (arrays, strings).",
                        "Variables and Constants: Declaration, initialization, and scope of variables; final keyword for constants.",
                        "Operators: Arithmetic, relational, logical, bitwise, and assignment operators.",
                        "Control Statements:  if, else, switch, for, while, do-while, break, continue."
                    ],
                    "Object-Oriented Programming (OOP) in Java": ["Classes and Objects: Definition of classes, objects, methods, and attributes.",
                        "Constructors: Use and types (default, parameterized).",
                        "Inheritance: extends keyword, single and multilevel inheritance.",
                        "Polymorphism: Method overloading (compile-time polymorphism) and method overriding (runtime polymorphism).",
                        "Encapsulation: Private access modifiers and getter/setter methods.",
                        "Abstraction: Abstract classes and interfaces (interface keyword).",
                        "Static Keyword: Static variables, methods, and blocks."
                    ],
                    "Core Java Concepts": ["Packages: Built-in and user-defined packages, import keyword.",
                        "Access Modifiers: Public, private, protected, default.",
                        "Arrays: Single and multi-dimensional arrays, array handling, ArrayList.",
                        "String Handling: String, StringBuilder, StringBuffer, string manipulation methods.",
                        "Wrapper Classes: Integer, Double, Boolean, etc., auto-boxing, and unboxing.",
                        "Enumerations: Using enum for representing fixed sets of constants."
                    ],
                    "Exception Handling": ["Types of Exceptions: Checked and unchecked exceptions.",
                        "Try-Catch Block: Exception handling with try, catch, finally.",
                        "Throw and Throws: Manually throwing exceptions, method signatures with throws.",
                        "Custom Exceptions: Creating user-defined exceptions."
                    ],
                    "Multithreading in Java": ["Thread Class and Runnable Interface: Creating and running threads.",
                        "Thread Lifecycle: States of a thread (new, runnable, waiting, timed waiting, terminated).",
                        "Synchronization: Using synchronized keyword to handle thread safety.",
                        "Inter-thread Communication: wait(), notify(), notifyAll().",
                        "Thread Priority: Setting thread priority."
                    ],
                    "File Handling (I/O)": ["Streams: Input and output streams, FileInputStream, FileOutputStream.",
                        "Readers and Writers: BufferedReader, BufferedWriter, FileReader, FileWriter.",
                        "Serialization: Serializing and deserializing objects using Serializable interface."
                    ],
                    "Collections Framework": ["List: ArrayList, LinkedList.",
                        "Set: HashSet, TreeSet, LinkedHashSet.",
                        "Map: HashMap, TreeMap, LinkedHashMap, Hashtable.",
                        "Queue and Deque: PriorityQueue, ArrayDeque.",
                        "Iterator and ListIterator: Traversing collections."
                    ],
                    "Generics": [
                        "Introduction to Generics: Generic classes, interfaces, and methods.",
                        "Bounded Types: Using bounded type parameters (e.g., <T extends Class>).",
                        "Wildcards: ?, extends, and super keywords in generics."
                    ],
                    "Java 8+ Features": [
                        "Lambda Expressions: Syntax and use for functional programming.",
                        "Streams API: Working with collections in a functional style using streams.",
                        "Optional Class: Handling null values more gracefully.",
                        "Functional Interfaces: Consumer, Supplier, Predicate, and custom functional interfaces.",
                        "Method References: References to static methods, instance methods, and constructors."
                    ],
                    "Advanced Topics": [
                        "Reflection API: Inspecting classes, methods, fields at runtime.",
                        "Annotations: Built-in and custom annotations (@Override, @Deprecated, @FunctionalInterface).",
                        "JVM Architecture: Understanding the Java Virtual Machine, class loading, memory management, garbage collection.",
                        "Concurrency Utilities: Executors, Callable, Future, CountDownLatch, Semaphore.",
                        "Networking: Sockets, URL handling, HttpURLConnection.",
                        "JDBC: Java Database Connectivity, connecting Java to databases, executing SQL queries.",
                        "JavaFX and Swing: GUI programming in Java."
                    ],
                    "Design Patterns": [
                        "Singleton Pattern: Restricting a class to one instance.",
                        "Factory Pattern: Creating objects without specifying the exact class.",
                        "Observer Pattern: Notifying multiple objects of state changes.",
                        "Decorator Pattern: Dynamically adding behavior to objects."
                    ],
                    "Memory Management": [
                        "Heap and Stack Memory: Understanding memory allocation in Java.",
                        "Garbage Collection: How garbage collection works, types of garbage collectors.",
                        "Memory Leaks: Identifying and preventing memory leaks."
                    ],
                    "Testing": [
                        "JUnit: Unit testing framework for Java.",
                        "Mockito: Framework for mocking objects in tests.",
                        "TestNG: Advanced testing framework for complex test scenarios."
                    ],
                    "Java Development Tools": [
                        "JDK, JRE, and JVM: Differences and roles.",
                        "Java Build Tools: Maven, Gradle for dependency management and project building.",
                        "IDE: Eclipse, IntelliJ IDEA, NetBeans for Java development.",
                        "Version Control: Using Git with Java projects."
                    ]
                }
            },
            javascript: {
                name: "JavaScript Topics",
                topics: {
                    "Introduction to JavaScript": "JavaScript is a versatile programming language used for web development.",
                    "Basic Concepts": [
                        "Syntax and Structure: Variables, comments, data types, and operators.",
                        "Variables and Constants: var, let, const keyword differences.",
                        "Data Types: Primitive(string, number, boolean, undefined, null, symbol) and reference(objects, arrays).",
                        "Operators: Arithmetic, comparison, logical, bitwise, and assignment operators.",
                        "Conditionals: if-else, switch statements, and ternary operator.",
                        "Loops: for, while, do-while, and for...in, for...of.",
                        "Functions: Function declaration, expressions, arrow functions, default parameters, and rest/ spread operators."
                    ],
                    "Advanced Data Structures": [
                        "Objects: Creating and manipulating objects, object methods, this keyword.",
                        "Arrays: Common methods (push, pop, shift, unshift, slice, splice, map, filter, reduce).",
                        "Maps and Sets: Usage of Map and Set for handling unique values and key-value pairs.",
                        "Destructuring: Destructuring arrays and objects for cleaner syntax."
                    ],
                    "Functions": [
                        "Closures: Function scope and closures, how inner functions have access to outer functions' variables.",
                        "IIFE: Immediately Invoked Function Expressions.",
                        "Callback Functions: Passing functions as arguments.",
                        "Recursion: Functions calling themselves for iterative processes.",
                        "Higher - Order Functions: Functions that return or take other functions as arguments."
                    ],
                    "Object-Oriented Programming (OOP)": [
                        "Constructor Functions: Defining custom objects using functions.",
                        "Prototypes and Inheritance: Prototype chaining, __proto__, and inheritance.",
                        "this Keyword: Understanding context of this in different scopes.",
                        "Classes: ES6 classes, inheritance with extends, super, constructor, and methods.",
                    ],
                    "Asynchronous JavaScript": [
                        "Callbacks: The foundation of asynchronous code.",
                        "Promises: Handling asynchronous operations using then, catch, finally.",
                        "Async/Await: Simplifying asynchronous code with async and await keywords.",
                        "Event Loop: Understanding how JavaScript handles async operations using the event loop, call stack, and task queues.",
                    ],
                    "DOM Manipulation": [
                        "Document Object Model (DOM): Understanding the structure of HTML documents as objects.",
                        "Selectors: getElementById, querySelector, getElementsByClassName.",
                        "Events: Handling events like clicks, form submissions, and key presses using addEventListener.",
                        "Event Bubbling/Capturing: Propagation of events through DOM elements.",
                        "Modifying DOM: Changing HTML structure dynamically by adding/removing elements, setting attributes, and changing styles.",
                    ],
                    "Error Handling": [
                        "try, catch, finally, throw: Handling and throwing custom errors.",
                        "Error Object: Built-in error types like TypeError, ReferenceError, SyntaxError."
                    ],
                    "Modules": [
                        "ES6 Modules: export, import for modular code organization.",
                        "CommonJS: Module patterns in environments like Node.js.",
                    ],
                    "Events and Event Handling": [
                        "Event Handling: Different types of events (UI, mouse, keyboard).",
                        "Event Delegation: Efficient event handling on multiple similar elements.",
                        "Event Object: Accessing event properties like target, type, and keyCode.",
                    ],
                    "AJAX & HTTP Requests": [
                        "AJAX: Making asynchronous HTTP requests.",
                        "XMLHttpRequest: Legacy method for making requests.",
                        "Fetch API: Modern API for making HTTP requests.",
                        "JSON: Using JavaScript Object Notation to exchange data with servers.",
                    ],
                    "Browser APIs": [
                        "LocalStorage and SessionStorage: Storing data in the browser.",
                        "Cookies: Working with browser cookies.",
                        "Geolocation API: Getting user's location data.",
                        "Web Workers: Running background threads in the browser.",
                        "Fetch API & Promises: Handling HTTP requests with modern tools.",
                    ],
                    "JavaScript Engine & Performance": [
                        `Hoisting: How function and variable declarations are "hoisted" to the top of the scope.`,
                        "Strict Mode: Enforcing stricter parsing and error handling in JavaScript code.",
                        "Garbage Collection: How memory is managed in JavaScript.",
                        "Debouncing and Throttling: Techniques to improve performance during events like scrolling or resizing.",
                    ],
                    "ES6+ (Modern JavaScript Features)": [
                        "Let & Const: Block-scoped variables.",
                        "Arrow Functions: Shorter syntax for functions.",
                        "Template Literals: Multiline strings and embedded expressions.",
                        "Default Parameters: Setting default values in functions.",
                        "Rest/Spread Operators: Merging and spreading arrays/objects.",
                        "Destructuring: Easier extraction of values from arrays or objects.",
                        "Modules: import/export syntax for organizing code.",
                    ],
                    "Miscellaneous": [
                        "Type Coercion: Implicit type conversion in JavaScript.",
                        "Timers: setTimeout and setInterval.",
                        "Equality: Differences between == and ===.",
                    ],
                    "Popular JavaScript Frameworks/Libraries": [
                        "React.js, Vue.js, Angular: Modern frontend frameworks.",
                        "Node.js: Server-side JavaScript.",
                        "jQuery: Popular (though legacy) library for simplifying DOM manipulation.",
                    ],
                }
            },
            python: {
                name: "Python Topics",
                topics: {
                    "Introduction to Python": "Python is a high-level, interpreted programming language known for its simplicity and readability.",
                    "Basic Concepts": [
                        "Syntax and Structure: Indentation, comments, and basic structure of a Python program.",
                        "Variables: Assigning values to variables, naming conventions, dynamic typing.",
                        "Data Types: Integers, floats, strings, booleans, and complex numbers.",
                        "Operators: Arithmetic, comparison, logical, assignment, and bitwise operators.",
                        "Input/Output: input() function for taking input, print() function for output.",
                    ],
                    "Control Flow": [
                        "Conditional Statements: if, elif, else for branching logic.",
                        "Loops: for and while loops.",
                        "Loop Control Statements: break, continue, and pass.",
                    ],
                    "Functions": [
                        "Function Definition: Using def keyword to define functions.",
                        "Parameters and Arguments: Positional, default, keyword, and arbitrary arguments (*args, **kwargs).",
                        "Return Statements: Returning values from functions.",
                        "Lambda Functions: Anonymous functions for short operations.",
                        "Recursion: Functions calling themselves.",
                    ],
                    "Data Structures": [
                        "Lists: Creating and manipulating lists, list comprehensions.",
                        "Tuples: Immutable sequences.",
                        "Dictionaries: Key-value pairs, dictionary methods.",
                        "Sets: Unordered collections of unique elements.",
                        "Strings: String manipulation, slicing, formatting (f-strings).",
                    ],
                    "Object-Oriented Programming (OOP)": [
                        "Classes and Objects: Defining classes, creating objects, and understanding instances.",
                        "Methods: Instance, class, and static methods.",
                        "Inheritance: Single and multiple inheritance, super() function.",
                        "Polymorphism: Implementing methods across multiple classes.",
                        "Encapsulation: Private and protected members.",
                        "Abstraction: Using abstract classes and methods.",
                        "Magic Methods: Special methods like __init__(), __str__(), __repr__(), __len__(), and operator overloading.",
                    ],
                    "Modules and Packages": [
                        "Importing Modules: Using built-in and external modules.",
                        "Creating Modules: Writing your own Python modules.",
                        "Packages: Structuring projects with packages and subpackages (__init__.py).",
                        "Virtual Environments: Managing dependencies with venv or virtualenv.",
                    ],
                    "File Handling": [
                        "Reading/Writing Files: open(), read(), write(), and with statement.",
                        "File Modes: r, w, a, rb, wb.",
                        "CSV Files: Reading and writing CSV using the csv module.",
                        "JSON Files: Parsing JSON data with the json module.",
                    ],
                    "Error Handling": [
                        "Exceptions: try, except, finally, and else clauses.",
                        "Custom Exceptions: Defining user-defined exceptions.",
                        "Error Types: Common errors like IndexError, TypeError, ValueError, KeyError.",
                    ],
                    "Libraries and Frameworks": [
                        "NumPy: Numerical operations with arrays.",
                        "Pandas: Data manipulation and analysis.",
                        "Matplotlib & Seaborn: Data visualization libraries.",
                        "Django/Flask: Web development frameworks.",
                        "Requests: Handling HTTP requests.",
                        "SQLAlchemy: Object-relational mapping (ORM).",
                        "BeautifulSoup: Web scraping.",
                        "TensorFlow & PyTorch: Machine learning frameworks.",
                        "OpenCV: Computer vision library.",
                    ],
                    "Iterators and Generators": [
                        "Iterators: Creating custom iterators using __iter__() and __next__().",
                        "Generators: Using yield to create generators for memory-efficient loops.",
                        "Comprehensions: List, dictionary, and set comprehensions for concise iteration.",
                    ],
                    "Decorators and Context Managers": [
                        "Decorators: Function decorators to modify behavior of functions.",
                        "Chaining Decorators: Using multiple decorators on a function.",
                        "Context Managers: Using with statement to manage resources like files.",
                    ],
                    "Regular Expressions (Regex)": [
                        "Regex Module: Using re module for pattern matching.",
                        "Search, Match, Findall: Finding and extracting patterns.",
                        "Regex Syntax: Meta characters (\d, \w, ^, $, [], etc.).",
                    ],
                    "Concurrency": [
                        "Multithreading: Using threading module for concurrent threads.",
                        "Multiprocessing: Using multiprocessing module for parallel processes.",
                        "AsyncIO: Handling asynchronous tasks with asyncio, await, and async keywords.",
                    ],
                    "Networking": [
                        "Socket Programming: Client-server communication using sockets.",
                        "HTTP Requests: Sending HTTP requests using requests library.",
                        "APIs: Interacting with REST APIs using JSON and HTTP.",
                    ],
                    "Database Interaction": [
                        "SQLite: Using the sqlite3 module for working with SQLite databases.",
                        "MySQL/PostgreSQL: Connecting to external databases.",
                        "SQLAlchemy: ORM for managing database models and queries.",
                        "MongoDB: Working with NoSQL databases using pymongo.",
                    ],
                    "Unit Testing": [
                        "unittest Module: Writing and running test cases.",
                        "pytest: Popular third-party testing framework.",
                        "Mocking: Creating mock objects for testing.",
                        "Assertions: Using assertEqual(), assertTrue(), etc.",
                    ],
                    "Data Science & Machine Learning": [
                        "NumPy: Handling multi-dimensional arrays.",
                        "Pandas: Data manipulation (Series, DataFrames).",
                        "Matplotlib/Seaborn: Data visualization.",
                        "Scikit-learn: Machine learning algorithms and tools.",
                        "TensorFlow & PyTorch: Deep learning libraries.",
                    ],
                    "Advanced Topics": [
                        "Metaclasses: Customizing class creation.",
                        "Descriptors: Customizing attribute access.",
                        "Coroutines: Advanced asynchronous programming with coroutines.",
                        "Type Hinting: Adding type annotations for better code readability and error checking.",
                        "Memory Management: Understanding Python's garbage collection and memory allocation.",
                        "Global Interpreter Lock (GIL): Managing threads in CPython.",
                    ],
                    "Version Control and Collaboration": [
                        "Git: Version control for managing code repositories.",
                        "GitHub/GitLab: Platforms for collaboration and code sharing.",
                    ],
                    "Data Serialization": [
                        "Pickle Module: Serializing and deserializing Python objects.",
                        "JSON Module: Converting between Python objects and JSON format.",
                    ],
                }
            },
            html: {
                name: "HTML Topics",
                topics: {
                    "Introduction to HTML": "HTML is the standard markup language for creating web pages.",
                    "HTML Basics": [
                        `The HTML document structure begins with <!DOCTYPE html>, which declares the document type.`,
                        `Head section includes metadata (<meta>), the title (<title>), and linking external resources (<link>).`,
                        `Body section holds all visible content like headings, paragraphs, images, and links.`,
                        `Basic tags: <h1> to <h6> for headings, <p> for paragraphs.`,
                        `Attributes add extra information to tags (e.g., class, id, style, lang).`,
                        `Always define the document's character encoding using <meta charset="UTF-8"> for compatibility.`,
                        `HTML is not case-sensitive, but it's good practice to write tags in lowercase.`,
                        `Ensure the page is mobile-friendly with <meta name="viewport" content="width=device-width, initial-scale=1.0">.`,
                    ],
                    "Text Formatting": [
                        `Use <h1> to <h6> for headings, where <h1> is the most important and <h6> the least.`,
                        `<p> for paragraphs, used to create blocks of text.`,
                        `Bold text with <strong> or <b>, and italic text with <em> or <i>.`,
                        `Line breaks with <br> to force a new line without starting a new paragraph.`,
                        `Horizontal rules <hr> to create thematic breaks or visual dividers.`,
                        `Create lists: Ordered lists <ol>, unordered lists <ul>, and list items <li>.`,
                        `Use blockquotes (<blockquote>) for quoting long passages of text.`,
                        `Superscript and subscript: <sup> and <sub> for special notations like footnotes or chemical formulas.`,
                    ],
                    "Links and Images": [
                        `Anchor tags (<a href="url">) are used to create links. The href attribute defines the link destination.`,
                        `Add target="_blank" to open links in a new tab.`,
                        `Use <img src="image.jpg" alt="description"> to display images; alt provides alternative text for accessibility.`,
                        `Images and links can include attributes like title for hover-over text.`,
                        `Internal linking: Use relative paths (e.g., <a href="about.html">About</a>).`,
                        `External linking: Provide full URLs (e.g., <a href="https://example.com">Visit</a>).`,
                        `Use favicon icons with <link rel="icon" href="favicon.ico"> in the <head>.`,
                        `For responsive images, use the srcset attribute or the <picture> tag.`,
                    ],
                    "Forms and Input": [
                        `Forms are created using <form>, and the action attribute defines where form data is sent.`,
                        `Use input elements: <input type="text">, <input type="password">, <input type="submit">, etc.`,
                        `Form attributes: method specifies GET or POST, and enctype is used for file uploads.`,
                        `Labels improve accessibility and usability: <label for="name">Name</label>.`,
                        `Add placeholders inside input fields with placeholder="Enter text".`,
                        `Group related form elements using <fieldset> and <legend>.`,
                        `Validation attributes like required, min, max, and pattern for built-in form validation.`,
                        `Create dropdowns using <select> and <option> tags.`,
                    ],
                    "Tables": [
                        `Use <table>, <tr> (table row), <th> (header), and <td> (data cell) to structure tables.`,
                        `Add table headers with <thead>, body with <tbody>, and footers with <tfoot>.`,
                        `Spanning rows/columns: colspan and rowspan merge cells across columns or rows.`,
                        `Apply borders to tables with CSS, or use the deprecated border attribute for inline styles.`,
                        `Use <caption> to provide a title or description for the table.`,
                        `Tables can be made responsive with CSS or HTML5, using overflow-x to allow horizontal scrolling.`,
                        `Semantic usage: Use tables only for tabular data, not for layout purposes.`,
                        `Add accessible descriptions for screen readers with scope on <th> elements.`,
                    ],
                    "Multimedia": [
                        `Embed audio with <audio controls src="file.mp3">, providing audio playback controls.`,
                        `Embed video with <video controls src="file.mp4">, and additional attributes like autoplay, loop, and muted.`,
                        `You can use source elements to support multiple file formats (<source src="video.mp4" type="video/mp4">).`,
                        `For multimedia embedding from external sources (e.g., YouTube), use <iframe>.`,
                        `Add alternative content for browsers that do not support multimedia tags (e.g., inside <audio> or <video>).`,
                        `Responsive media: Ensure multimedia adjusts to different screen sizes using CSS or container queries.`,
                        `Always provide text descriptions for accessibility (e.g., aria-label or alternative text).`,
                        `Use <track> for subtitles and captions in videos.`,
                    ],
                    "Semantic HTML": [
                        `Semantic tags like <header>, <footer>, <article>, <section>, and <aside> improve page structure.`,
                        `Use <nav> for navigation menus to help screen readers and search engines understand the page layout.`,
                        `The <main> element wraps the main content, distinct from headers, footers, and sidebars.`,
                        `Use <article> for standalone content pieces like blog posts or news articles.`,
                        `<section> is used for grouping related content within an article or page.`,
                        `Accessibility is improved with semantic tags as they provide better context for assistive technologies.`,
                        `<figure> and <figcaption> are used to associate images with captions.`,
                        `Use <aside> for content tangentially related to the main content, like sidebars.`,
                    ],
                    "HTML5 APIs": [
                        `Geolocation API: Fetch the user’s location with navigator.geolocation.getCurrentPosition.`,
                        `Web Storage API: Use localStorage and sessionStorage to store data locally on the client side.`,
                        `Canvas API: Create graphics and animations with <canvas> and JavaScript.`,
                        `Drag-and-Drop API: Enable drag-and-drop interactions on elements using draggable attributes.`,
                        `Web Workers API: Allow JavaScript to run in the background without affecting the user interface.`,
                        `Fetch API: A modern alternative to XMLHttpRequest for making HTTP requests.`,
                        `Service Workers: Enable offline capabilities and background tasks like push notifications.`,
                        `Notification API: Display desktop notifications via JavaScript.`,
                    ],
                    "Meta Tags": [
                        `Use character encoding meta tags to define character sets, e.g., <meta charset="UTF-8">.`,
                        `The viewport meta tag (<meta name="viewport">) helps with responsive design on mobile devices.`,
                        `SEO-related meta tags like <meta name="description" content="text"> help with search engine ranking.`,
                        `Use <meta http-equiv="X-UA-Compatible" content="IE=edge"> for compatibility in older versions of Internet Explorer.`,
                        `Social media meta tags (e.g., Open Graph for Facebook, Twitter Cards) optimize sharing.`,
                        `Set author and copyright information with <meta name="author" content="Your Name">.`,
                        `Robots meta tag controls how search engines index your page (<meta name="robots" content="index, follow">).`,
                        `Add <meta http-equiv="refresh" content="30"> to refresh the page after a specified interval.`,
                    ],
                    "Responsive Web Design": [
                        `Use media queries (@media) to apply CSS styles based on device width or screen size.`,
                        `Viewport meta tag is essential for making web pages mobile-friendly (<meta name="viewport" content="width=device-width, initial-scale=1">).`,
                        `Fluid layouts: Use percentages or flexible units like rem, em, or vh/vw for responsive sizing.`,
                        `CSS Flexbox and Grid make it easier to create responsive layouts without floats.`,
                        `Apply responsive images using srcset to load different image sizes based on the screen resolution.`,
                        `Ensure text readability on smaller screens by adjusting font size and line spacing.`,
                        `Use media query breakpoints for different screen sizes (e.g., 320px, 768px, 1024px).`,
                        `Test responsiveness across various devices and screen sizes.`,
                    ],
                }
            },
            css: {
                name: "CSS Topics",
                topics: {
                    "Introduction to CSS": "CSS is used for styling and layout of web pages.",
                    "CSS Basics": [
                        `Selectors target HTML elements to apply styles. Common selectors include element selectors (p), class selectors (.class), and ID selectors (#id).`,
                        `Declarations consist of a property and value pair (e.g., color: blue;).`,
                        `CSS files are linked to HTML using <link rel="stylesheet" href="styles.css"> inside the <head> section.`,
                        `Use inline CSS (style="property: value;") for quick styling directly in HTML elements.`,
                        `Internal CSS is defined within <style> tags inside the HTML <head> but should be minimized for better separation of concerns.`,
                        `CSS follows the Cascading rule, meaning later styles can override previous ones based on specificity and inheritance.`,
                        `Box model consists of margins, borders, padding, and content. Understanding it is crucial for layout design.`,
                        `Apply comments in CSS using /* comment */ to document code for better readability.`,
                    ],
                    "CSS Selectors": [
                        `Type selectors select all elements of a given type (e.g., p for all paragraphs).`,
                        `Class selectors (.classname) are reusable and apply styles to multiple elements with the same class.`,
                        `ID selectors (#idname) target a specific, unique element.`,
                        `Attribute selectors (e.g., input[type="text"]) style elements based on their attributes.`,
                        `Pseudo-classes (:hover, :focus, :nth-child) apply styles when elements are in a specific state.`,
                        `Group selectors (e.g., h1, p) apply the same styles to multiple elements at once.`,
                        `Universal selector (*) targets all elements on the page.`,
                        `Combinators like descendant ( ), child (>), adjacent sibling (+), and general sibling (~) selectors refine selections based on element relationships.`,
                    ],
                    "CSS Box Model": [
                        `The box model includes the content, padding, border, and margin for each element.`,
                        `Padding adds space inside the element, between the content and the border.`,
                        `Borders surround the padding and content and can be customized with border-width, border-style, and border-color.`,
                        `Margin creates space outside the element, separating it from neighboring elements.`,
                        `Use box-sizing: border-box; to include padding and border within the element’s width and height.`,
                        `Content width is defined by the total width minus padding, borders, and margins.`,
                        `Margin collapsing occurs between adjacent elements, where the larger margin takes effect instead of the sum.`,
                        `Use margin: auto; to center block elements horizontally within their container.`,

                    ],
                    "CSS Flexbox": [
                        `Flexbox is a layout model that allows easy alignment and distribution of space between items in a container.`,
                        `Container properties: display: flex; enables flexbox, and flex-direction sets the main axis (row, column).`,
                        `Main axis alignment: Use justify-content to align items along the main axis (e.g., center, space-between, space-around).`,
                        `Cross axis alignment: Use align-items to align items along the cross-axis (e.g., flex-start, center, stretch).`,
                        `Items can be reordered using order, and flex-grow controls how much an item should grow relative to others.`,
                        `align-self can override the alignment of a single item within the container.`,
                        `Use flex-wrap to control whether items wrap onto multiple lines or stay on one line.`,
                        `Nested flexboxes allow you to create complex layouts by applying flexbox inside flex items.`,
                    ],
                    "CSS Grid": [
                        `Grid container: Enable the grid layout by setting display: grid on a container.`,
                        `Use grid-template-columns and grid-template-rows to define the size and number of columns and rows.`,
                        `Grid gaps: Add space between grid items using grid-gap or its sub-properties grid-column-gap and grid-row-gap.`,
                        `Items can span multiple columns or rows using grid-column: start / end and grid-row: start / end.`,
                        `Use grid-area to assign a grid item to a specific area defined by grid-template-areas.`,
                        `Implicit grids are automatically generated by placing items outside the explicit grid using grid-auto-rows and grid-auto-columns.`,
                        `Align grid items using align-items and justify-items for positioning inside cells.`,
                        `Fractional units (fr) allow you to distribute space proportionally within the grid (e.g., 1fr 2fr).`,
                    ],
                    "Responsive Web Design with CSS": [
                        `Use media queries (@media) to apply styles based on screen size, orientation, or resolution (e.g., @media (max-width: 768px)).`,
                        `Set the viewport meta tag in HTML (<meta name="viewport" content="width=device-width, initial-scale=1">) to ensure proper scaling on mobile devices.`,
                        `Use relative units like percentages (%), em, rem, vw, and vh for responsive sizing and spacing.`,
                        `Fluid grids: Create flexible layouts that adjust to screen size using percentage-based widths for columns.`,
                        `Apply responsive typography by scaling text with em or rem units.`,
                        `Use CSS Flexbox or Grid to create responsive layouts without relying on floats.`,
                        `Responsive images: Use max-width: 100%; to ensure images scale within their container, or use srcset for multiple image sizes.`,
                        `Test designs on various devices and screen sizes to ensure responsiveness and usability.`,
                    ],
                    "Positioning and Layout": [
                        `Static positioning is the default, where elements appear in the order they are written.`,
                        `Relative positioning allows you to adjust an element’s position relative to its normal position (top, left, right, bottom).`,
                        `Absolute positioning positions an element relative to its nearest positioned ancestor.`,
                        `Fixed positioning sticks an element to a specific position on the screen, even when scrolling.`,
                        `Sticky positioning toggles between relative and fixed positioning based on the scroll position.`,
                        `Use z-index to control the stacking order of overlapping elements (higher numbers are in front).`,
                        `The float property was traditionally used for layouts but is now largely replaced by Flexbox and Grid.`,
                        `Use clear to control the behavior of elements following floated elements.`,
                    ],
                    "Typography in CSS": [
                        `Use the font-family property to set the font, specifying multiple fallbacks (e.g., font-family: Arial, sans-serif;).`,
                        `Control font size using px, em, rem, or percentages for scalable and responsive text.`,
                        `Use font-weight to adjust font thickness (e.g., bold, normal, lighter, or numeric values like 300, 700).`,
                        `Adjust line height with line-height for better readability, often set to 1.5 or 1.6.`,
                        `Text alignment is controlled with text-align (e.g., left, center, right, justify).`,
                        `Text decoration: Use text-decoration for underlines, strikethroughs, and overlines (e.g., underline, line-through).`,
                        `Use letter spacing (letter-spacing) and word spacing (word-spacing) to adjust space between letters and words.`,
                        `Responsive typography can be achieved using em or rem units or CSS media queries.`,
                    ],
                    "Colors and Backgrounds": [
                        `Define colors using hex codes (#FFFFFF), RGB (rgb(255, 255, 255)), RGBA (rgba(255, 255, 255, 0.5) for transparency), or HSL (hsl(0, 100%, 50%)).`,
                        `Background colors are applied using background-color.`,
                        `Background images are added with background-image: url("image.jpg");, and background-size adjusts the image size.`,
                        `Gradients: Use linear-gradient or radial-gradient for gradient backgrounds.`,
                        `Use background-repeat to control whether an image repeats (e.g., repeat, no-repeat).`,
                        `Position backgrounds using background-position to control where the image is placed (e.g., center, top left).`,
                        `Set multiple backgrounds by separating properties with commas (e.g., background: url(image1.jpg), url(image2.jpg);).`,
                        `Opacity controls the transparency of an element with a value between 0 (fully transparent) and 1 (fully opaque).`,
                    ],


                }
            },
            digital_marketing: {
                name: "Digital Marketing Topics",
                topics: {
                    "Introduction to Digital Marketing": [
                        "Digital marketing refers to promoting products or services using digital channels like search engines, social media, email, and websites.",
                        "The goal is to reach potential customers through online platforms and enhance brand awareness, sales, and engagement.",
                        "SEO (Search Engine Optimization), PPC (Pay-Per-Click), content marketing, and social media marketing are popular digital marketing strategies.",
                        "It offers precise analytics and tracking to measure campaign effectiveness.",
                        "Targeting is easier with digital marketing, as marketers can segment audiences based on demographics, interests, and behavior.",
                        "It includes both organic (unpaid) and paid marketing efforts, such as social media posts and ads.",
                        "Digital marketing is highly dynamic, with trends and technologies changing rapidly.",
                        "The success of digital marketing relies on a customer-centric approach and creating valuable content.",
                    ],
                    "Search Engine Optimization (SEO)": [
                        "SEO is the process of optimizing your website to rank higher in search engine results pages (SERPs).",
                        "It involves both on-page SEO (optimizing content, titles, meta tags, etc.) and off-page SEO (building backlinks, improving domain authority).",
                        "Keyword research is critical to finding terms your target audience is searching for.",
                        "On-page SEO includes optimizing for keywords, using proper heading tags (H1, H2, etc.), and ensuring a good user experience (UX).",
                        "Technical SEO focuses on improving site speed, mobile-friendliness, and crawlability to enhance search rankings.",
                        "Backlinking (getting other sites to link to yours) improves your website’s authority and search ranking.",
                        "Search engines like Google use algorithms to rank sites based on relevance, authority, and user satisfaction.",
                        "SEO is a long-term strategy and requires consistent optimization and updates to maintain rankings.",
                    ],
                    "Social Media Marketing (SMM)": [
                        "SMM involves promoting content, products, or services on social media platforms like Facebook, Instagram, Twitter, LinkedIn, and more.",
                        "It allows businesses to engage directly with their audience through comments, shares, likes, and messages.",
                        "Content creation is key to SMM, including images, videos, stories, reels, and infographics that resonate with the audience.",
                        "Hashtags help categorize content and increase visibility, especially on platforms like Instagram and Twitter.",
                        "Paid social ads allow businesses to target specific demographics based on location, interests, and behavior.",
                        "Social media platforms provide analytics to measure engagement, reach, and the success of campaigns.",
                        "Influencer marketing involves partnering with social media personalities to promote products to their followers.",
                        "SMM is effective for building brand awareness, fostering a community, and driving website traffic.",
                    ],
                    "Pay-Per-Click Advertising (PPC)": [
                        "PPC is a model of internet marketing where advertisers pay a fee each time their ad is clicked.",
                        "Google Ads is the most popular PPC platform, where businesses can bid on keywords to display their ads in search results.",
                        "Bidding strategies in PPC include CPC (Cost Per Click), CPM (Cost Per Thousand Impressions), and CPA (Cost Per Acquisition).",
                        "Ad copy and landing page relevance are crucial for the success of PPC campaigns.",
                        "PPC allows for precise targeting, enabling businesses to show ads to users based on their search intent, location, or interests.",
                        "A/B testing in PPC involves experimenting with different versions of ads to determine which performs better.",
                        "PPC offers instant visibility for new products or services but can be costly if not managed correctly.",
                        "The success of a PPC campaign depends on budget management, keyword strategy, and ad relevance.",
                    ],
                    "Content Marketing": [
                        "Content marketing focuses on creating and distributing valuable, relevant content to attract and retain a clearly defined audience.",
                        "Content formats include blog posts, videos, infographics, eBooks, podcasts, and more.",
                        "The goal is to educate and engage the audience rather than directly selling to them.",
                        "SEO-friendly content can improve your site's visibility in search engine results.",
                        "Content marketing helps establish your business as a thought leader and builds trust with your audience.",
                        "Consistency is key in content marketing to keep your audience engaged and coming back for more.",
                        "Content should be shareable and optimized for various platforms like blogs, social media, and email newsletters.",
                        "A successful content marketing strategy focuses on addressing the audience's pain points and providing solutions.",
                    ],
                    "Email Marketing": [
                        "Email marketing involves sending targeted emails to prospects and customers to promote products, services, or content.",
                        "It’s one of the most cost-effective forms of digital marketing, offering a high ROI (Return on Investment).",
                        "Segmentation is important in email marketing to ensure your message is personalized and relevant to different audience groups.",
                        "Automated email campaigns, such as welcome emails or abandoned cart reminders, can drive engagement and conversions.",
                        "The subject line is critical in determining whether your email will be opened or ignored.",
                        "Email marketing tools like Mailchimp or Constant Contact offer templates, analytics, and automation features.",
                        "Emails should be optimized for mobile devices, as a large percentage of users read emails on their phones.",
                        "Use A/B testing to experiment with different email formats, subject lines, and call-to-actions to improve performance.",
                    ],
                    "Analytics and Data-Driven Marketing": [
                        "Analytics involve tracking user behavior, engagement, and conversions using tools like Google Analytics.",
                        "Key performance indicators (KPIs) such as traffic, bounce rate, conversion rate, and ROI help measure the success of a campaign.",
                        "Conversion tracking allows businesses to see how effective their marketing efforts are in driving actions like purchases or sign-ups.",
                        "A/B testing helps optimize various elements of digital campaigns by comparing different versions.",
                        "Data-driven marketing uses customer data to make informed decisions about future campaigns and personalization.",
                        "Analytics help identify trends, showing which channels and tactics are performing best.",
                        "Understanding audience demographics and behavior enables more targeted and effective campaigns.",
                        "Dashboards and reports summarize marketing performance for easy interpretation and action.",
                    ],
                    "Influencer and Affiliate Marketing": [
                        "Influencer marketing involves partnering with social media influencers to promote products to their audience.",
                        "Influencers can be micro-influencers (smaller, niche audience) or macro-influencers (large, broad audience).",
                        "Authenticity is crucial in influencer marketing – the audience should trust the influencer’s recommendations.",
                        "Affiliate marketing allows affiliates to promote products on their platforms, earning a commission for each sale.",
                        "Tracking links are used in affiliate marketing to measure the effectiveness of the affiliate’s promotions.",
                        "Both influencer and affiliate marketing help brands reach targeted audiences through trusted individuals or networks.",
                        "Content collaboration with influencers often includes sponsored posts, reviews, or giveaways.",
                        "Building long-term relationships with influencers or affiliates can lead to ongoing promotion and brand loyalty.",
                    ],

                }
            }
        };

        function loadCourse(courseName) {
            const course = courses[courseName];
            const sidebar = document.getElementById('course-sidebar');
            const topicList = document.getElementById('course-topics');
            const courseTitle = sidebar.querySelector('h3');

            courseTitle.innerText = course.name;

            topicList.innerHTML = '';

            for (let topic in course.topics) {
                let li = document.createElement('li');
                let a = document.createElement('a');
                a.href = "javascript:void(0);";
                a.innerText = topic;
                a.onclick = () => loadTopic(topic, course.topics[topic]);
                li.appendChild(a);
                topicList.appendChild(li);
            }
        }

        function loadTopic(topicTitle, topicContent) {
            const topicTitleElement = document.getElementById('topic-title');
            const topicDescriptionElement = document.getElementById('topic-description');
            const loadingSpinner = document.getElementById('loading-spinner');

            loadingSpinner.style.display = 'block';

            setTimeout(() => {
                loadingSpinner.style.display = 'none';

                topicTitleElement.innerText = topicTitle;
                topicDescriptionElement.innerHTML = '';

                if (Array.isArray(topicContent)) {
                    topicContent.forEach(point => {
                        let p = document.createElement('p');
                        p.innerText = point;
                        topicDescriptionElement.appendChild(p);
                    });
                } else {
                    let p = document.createElement('p');
                    p.innerText = topicContent;
                    topicDescriptionElement.appendChild(p);
                }
            }, 500);
        }

        window.onload = () => {
            loadCourse('java');
        };



    </script>




</body>

</html>