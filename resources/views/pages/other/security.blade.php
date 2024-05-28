@extends('app')

@section('title')
    Security Policy | Planno
@endsection

@section('content')

    <section class="other-page-content">

        <div class="container d-flex justify-content-center align-items-center">

            <div class="other-page-container">

                <h1>Planno's Security Policy</h1>

                <p>
                    From confidential business proposals to personal home projects, our users trust us to keep their
                    data secure, private, and available whenever they need it. We take that responsibility seriously.
                </p>

                <p>
                    At Planno, we maintain a security system that:
                </p>

                <ul>
                    <li>
                        <p>
                            Prevents all unauthorized access;
                        </p>
                    </li>
                    <li>
                        <p>
                            Supports continuous monitoring for potential vulnerabilities; and
                        </p>
                    </li>
                    <li>
                        <p>
                            Embraces ongoing, proactive improvement to stay on top of the latest security tools and threats.
                        </p>
                    </li>
                </ul>

                <h1>Data Protection</h1>

                <h4>In Transit</h4>

                <p>
                    All user data including project names, task names, comments, uploaded files, account information,
                    and payment information are sent using industry best practices regarding traffic: Specifically,
                    we use TLS 1.1-1.2 secure channels and support both 128-bit or 256-bit configurations, depending
                    on the browser.
                </p>

                <h4>At Rest</h4>
                <p>
                    We use Amazon Web Services (AWS) servers to host all user data. We make extensive use of their
                    built-in firewalls to protect your data against unauthorized remote access.
                </p>

                <p>
                    Projects, tasks, comments, account information, and payment information are all stored and
                    encrypted at rest.
                </p>

                <p>
                    All files uploaded after April 11, 2016, are stored and encrypted at rest. Encrypting these
                    files add a layer of security. Files uploaded prior to this date are still fully protected
                    from unauthorized physical and remote access by AWS firewalls.
                </p>

                <p>
                    AWS data centers undergo annual certifications to ensure they meet the highest standards of physical
                    and virtual security. You can find more information on AWS security practices at
                    <a href="https://aws.amazon.com/tr/security/">https://aws.amazon.com/tr/security/</a>.
                </p>

                <p>
                    All data included in Dropbox and Google Drive attachments remain on those companies’ servers and
                    are covered by their respective security policies and practices.
                </p>

                <h1 class="mt-4">Data Reliability</h1>

                <p>
                    All user data are automatically backed up on AWS servers with multiple redundant copies.
                </p>

                <p>
                    Additionally, Todoist creates automatic backups within the app on a daily basis. You can also create
                    a backup at any time. These backups can be accessed in Account Settings and can be used to recover
                    data for any project or task. You can find more information about how backups work
                    <a href="#">here</a>.
                </p>

                <h1 class="mt-4">Report a Vulnerability</h1>

                <p>
                    If you discover any security vulnerability in Planno, please submit a report and we'll
                    do our best to fix it right away.
                </p>

                <a href="{{ route("contact-us") }}#contact-us">
                    Submit a Vulnerability
                </a>

            </div>

        </div>

    </section>

@endsection
