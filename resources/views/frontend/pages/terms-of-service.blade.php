@extends('Frontend.frontend-layout.app')

@section('title', 'Terms of Service | SmartAI Soft')
@section('description', 'Review SmartAI Soft’s terms of service for using our website, contacting our team, and engaging with our services.')
@section('content')
    <div
      class="
        bg-white text-slate-500" style="font-family: 'Inter', sans-serif;">
           <div  class="top-0 right-0 absolute bg-pink-400/40 blur-[120px] rounded-full w-[300px] lg:w-[700px] h-[400px] lg:h-[750px] pointer-events-none"
       >
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <header class="pt-32 pb-12 sm:pt-40 md:pt-48 md:pb-16 text-center" data-aos="fade-up">
                <h1
                    class="text-4xl sm:text-5xl md:text-7xl lg:text-8xl font-extrabold text-slate-950 tracking-tighter leading-[1.1] md:leading-none mb-4 px-2">
                    Terms of Service
                </h1>
                <div class="w-12 h-1 bg-[#f43f5e] mx-auto rounded-full opacity-20"></div>
            </header>

            <div class="max-w-6xl mx-auto pb-32 px-2" data-aos="fade-up" data-aos-delay="100">

                <section class="mb-14">
                    <h2 class="text-xl md:text-2xl font-extrabold text-slate-950 tracking-tight mb-4">1. Acceptance of Terms
                    </h2>
                    <p class="text-lg leading-relaxed">
                        These Terms of Service (this "Agreement") between SmartAI Soft ("we," "us," "our") and you govern
                        your access and use of our web platform and website made available through <a
                            href="https://www.smartaisoft.com" class="text-[#f43f5e] font-bold">www.smartaisoft.com</a>
                        (this
                        "Site") and the subscription services we provide (the "Services"). By using this Site and accessing
                        our Services in any manner, you acknowledge that you have read, understood, and agree to be bound by
                        this Agreement. This Site is controlled and operated by us from our offices within the United
                        States, and we make no representation that materials in the Site are appropriate or available for
                        use in other locations. Those who choose to access this site from other locations do so on their own
                        initiative and are responsible for compliance with all applicable local laws.
                    </p>
                </section>

                <section class="mb-14">
                    <h2 class="text-xl md:text-2xl font-extrabold text-slate-950 tracking-tight mb-4">2. Privacy Policy</h2>
                    <p class="text-lg leading-relaxed">
                        Our Privacy Policy, which can be found at <a href="{{ route('privacy.policy') }}"
                            class="text-[#f43f5e] font-bold underline">Privacy Policy</a>, describes in exhaustive detail
                        how
                        we may use, store, and process your personal information. By continuing to use this Site, you accept
                        the Privacy Policy, which is incorporated herein by reference as a vital part of our agreement. If
                        you object to your personal information being used as described in the Privacy Policy, we request
                        that you immediately cease use of our services. You must be at least 18 years of age to access this
                        Site, and by agreeing to these terms, you represent and warrant that you meet this age requirement.
                    </p>
                </section>

                <section class="mb-14">
                    <h2 class="text-xl md:text-2xl font-extrabold text-slate-950 tracking-tight mb-4">3. The Services</h2>
                    <p class="text-lg leading-relaxed mb-4">
                        Subject to your compliance with this Agreement and your associated payments, we will provide the
                        Services to you during the term to which you have subscribed. You agree to provide accurate,
                        current, and complete information during the registration process and to maintain the security of
                        any password and identification provided. You accept sole responsibility for all activities that
                        occur under your account, regardless of whether you authorized the activity. SmartAI Soft reserves
                        the right to modify, replace, or discontinue the Services at any time, for any reason, without prior
                        notice to you, though we strive for maximum uptime and reliability.
                    </p>
                    <ul class="space-y-3 list-none">
                        <li class="pl-6 border-l-2 border-[#f43f5e] font-medium text-slate-700 italic">You must notify us
                            immediately of any unauthorized use of your account or security breach.</li>
                        <li class="pl-6 border-l-2 border-[#f43f5e] font-medium text-slate-700 italic">You are responsible
                            for obtaining all telecommunications and computer equipment needed to access the Services.</li>
                    </ul>
                </section>

                <section class="mb-14">
                    <h2 class="text-xl md:text-2xl font-extrabold text-slate-950 tracking-tight mb-4">4. Use of the Services
                    </h2>
                    <p class="text-lg leading-relaxed">
                        You may use the Services for any number of projects or scope for which you have subscribed, and our
                        output volume depends on the specific plan and request complexity. While we accept unlimited
                        requests for Deliverables, our actual output volume depends on factors like the type of plan and the
                        complexity of the specific task. We do our best to work with you to accommodate priority items and
                        timelines, but we do not guarantee the amount of work created in a single subscription period. You
                        are the owner and/or controller of all content or materials you provide to us, and you represent
                        that you have the necessary rights and licenses to distribute and utilize such Customer Content.
                    </p>
                </section>

                <section class="mb-14">
                    <h2 class="text-xl md:text-2xl font-extrabold text-slate-950 tracking-tight mb-4">5. Use of Licensed
                        Content</h2>
                    <p class="text-lg leading-relaxed">
                        Subject to full payment, we grant you a revocable, non-exclusive, non-transferable license to the
                        Licensed Content for your personal or professional use as incorporated into a Deliverable. We and
                        our licensors retain ownership over Licensed Content, which may include stock photography, video, or
                        templates, and you may not sell, lease, or sub-license such content apart from the Deliverable. To
                        the extent we license content from third parties like Adobe Stock or Envato, you agree to comply
                        with their respective license terms. SmartAI Soft will retain ownership over any content produced
                        using AI technologies unless otherwise specified in your specific service tier or contract.
                    </p>
                </section>

                <section class="mb-14">
                    <h2 class="text-xl md:text-2xl font-extrabold text-slate-950 tracking-tight mb-4">6. Fees and Payments
                    </h2>
                    <p class="text-lg leading-relaxed">
                        Service fees must be paid in full according to the billing frequency (monthly, quarterly, or
                        annually) specified during your registration. Failure of payment will result in the immediate
                        suspension of Services, and any overdue charges will accrue interest at the rate of 1.5% per month
                        or the maximum rate permitted by law. We reserve the right to change our fees upon five days'
                        advance notice, and by continuing to use the Services, you accept these changes. All payments made
                        to SmartAI Soft are non-cancelable and non-refundable, as we commit resources and engineering hours
                        immediately upon receipt of your subscription order.
                    </p>
                </section>

                <section class="mb-14">
                    <h2 class="text-xl md:text-2xl font-extrabold text-slate-950 tracking-tight mb-4">7. Confidential
                        Information</h2>
                    <p class="text-lg leading-relaxed">
                        SmartAI Soft agrees to maintain the strict confidentiality of your non-public or proprietary
                        information, including business plans and product designs. You also agree to maintain the
                        confidentiality of our proprietary information and will not disclose it to any third party without
                        our express written consent. We will only limit access to your Confidential Information to those
                        employees, contractors, and representatives who need to know it to provide Services to you. This
                        mutual obligation of confidentiality shall survive for five (5) years after the termination of this
                        Agreement, ensuring the protection of intellectual property and competitive advantages.
                    </p>
                </section>

                <section class="mb-14">
                    <h2 class="text-xl md:text-2xl font-extrabold text-slate-950 tracking-tight mb-4">8. Publicity</h2>
                    <p class="text-lg leading-relaxed">
                        Unless you provide us with a specific written notice to the contrary, you agree that SmartAI Soft
                        may disclose that you are a customer of our services. We may use your name and logo in our digital
                        marketing materials, including our website, social media profiles, and case studies to highlight our
                        successful collaborations. This helps us showcase the diverse range of industries we serve and build
                        credibility with potential new partners. If you wish to opt-out of this publicity, please send a
                        written request to <span class="font-bold text-slate-900">info@smartaisoft.com</span>, and we will
                        remove your information from future marketing distributions.
                    </p>
                </section>

                <section class="mb-14">
                    <h2 class="text-xl md:text-2xl font-extrabold text-slate-950 tracking-tight mb-4">9. Term and
                        Termination</h2>
                    <p class="text-lg leading-relaxed">
                        This Agreement will expire or terminate upon the expiration or termination of your account or
                        subscription. SmartAI Soft may terminate your account at any time upon notice if you default or
                        breach any material terms of this Agreement, including non-payment. Upon termination, your right to
                        access the platform and any Deliverables not yet finalized will immediately cease. Certain sections
                        of this Agreement, including confidentiality obligations, liability waivers, and intellectual
                        property ownership, will survive termination to protect the rights and interests of both parties
                        involved in this Agreement.
                    </p>
                </section>

                <section class="mb-14">
                    <h2 class="text-xl md:text-2xl font-extrabold text-slate-950 tracking-tight mb-4">10. Disclaimer of
                        Warranties</h2>
                    <p class="text-lg leading-relaxed uppercase font-bold text-slate-700 text-sm">
                        THE SERVICES ARE PROVIDED ON AN "AS IS" AND "AS AVAILABLE" BASIS WITHOUT ANY WARRANTIES OF ANY KIND,
                        EITHER EXPRESS OR IMPLIED. TO THE FULLEST EXTENT PERMITTED BY LAW, SMARTAI SOFT DISCLAIMS ALL
                        WARRANTIES, INCLUDING BUT NOT LIMITED TO WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR
                        PURPOSE, AND NON-INFRINGEMENT. WE DO NOT WARRANT THAT THE SERVICES WILL BE UNINTERRUPTED, TIMELY,
                        SECURE, OR ERROR-FREE, NOR DO WE MAKE ANY WARRANTY AS TO THE RESULTS THAT MAY BE OBTAINED FROM THE
                        USE OF OUR DELIVERABLES. USE OF ANY AI-GENERATED CONTENT IS AT YOUR OWN RISK.
                    </p>
                </section>

                <section class="mb-14">
                    <h2 class="text-xl md:text-2xl font-extrabold text-slate-950 tracking-tight mb-4">11. Liability Waiver
                    </h2>
                    <p class="text-lg leading-relaxed">
                        SmartAI Soft will not be responsible for any lost profits, revenues, data, financial losses or
                        indirect, special, consequential, or exemplary damages. Even if we have been advised of the
                        possibility of such damages, our total liability for any claims under these terms is limited to a
                        maximum of fifty dollars ($50.00). This waiver applies to any damages arising from your use or
                        inability to use our services, or any unauthorized access to our systems. This limitation of
                        liability is a fundamental element of the basis of the bargain between SmartAI Soft and you, without
                        which the services would not be provided.
                    </p>
                </section>

                <section class="mb-14">
                    <h2 class="text-xl md:text-2xl font-extrabold text-slate-950 tracking-tight mb-4">12. Indemnification
                    </h2>
                    <p class="text-lg leading-relaxed">
                        You agree to defend, indemnify, and hold SmartAI Soft and its affiliates, officers, and employees
                        harmless from and against any third-party claims, liabilities, or damages arising out of your use of
                        the Services or breach of this Agreement. This includes any claims that your Customer Content
                        infringes upon the intellectual property rights of another party. You shall cooperate as required by
                        us in the defense of any such claim, and we reserve the right to assume the exclusive defense and
                        control of any matter subject to indemnification by you. You will not, in any event, settle any
                        claim without our prior written consent to ensure our brand reputation is protected.
                    </p>
                </section>

                <section class="mb-14">
                    <h2 class="text-xl md:text-2xl font-extrabold text-slate-950 tracking-tight mb-4">13. Links to
                        Third-Party Platforms</h2>
                    <p class="text-lg leading-relaxed">
                        Our Site and Services may contain links to other websites or social media platforms that are not
                        owned or controlled by SmartAI Soft. We provide these links only as a convenience, and we do not
                        endorse or control the privacy practices or content of these third-party sites. You agree that we
                        are not responsible for any damage or loss caused by your use of any third-party website, products,
                        or services. We encourage you to review the terms of service and privacy policies of any third-party
                        site you visit to understand how they may collect and use your personal information.
                    </p>
                </section>

                <section class="mb-14">
                    <h2 class="text-xl md:text-2xl font-extrabold text-slate-950 tracking-tight mb-4">14. Digital Millennium
                        Copyright Act</h2>
                    <p class="text-lg leading-relaxed">
                        We respect the intellectual property rights of others and respond to notices of alleged copyright
                        infringement according to the Digital Millennium Copyright Act (DMCA). If you believe that your
                        copyrighted work has been infringed, please send a written notice to our designated agent at <span
                            class="font-bold text-slate-950">info@smartaisoft.com</span>. Your notice must include a
                        description of the copyrighted work, the location of the infringing material on our site, and your
                        contact information. We take these reports seriously and will investigate and remove infringing
                        material as required by applicable law to maintain a compliant platform.
                    </p>
                </section>

                <section class="mb-14">
                    <h2 class="text-xl md:text-2xl font-extrabold text-slate-950 tracking-tight mb-4">15. Dispute Resolution
                    </h2>
                    <p class="text-lg leading-relaxed">
                        This Agreement is governed by the laws of the **State of Wyoming**, without regard to conflict of
                        law principles. Any legal action or proceeding arising out of or relating to this Agreement shall be
                        instituted exclusively in state or federal courts located in Wyoming. You consent to the
                        jurisdiction of these courts and agree that venue is proper in any such legal action. If a court
                        finds it lacks exclusive jurisdiction, you agree to settle all disputes through binding arbitration
                        in Wyoming in accordance with the International Arbitration Rules of the International Centre for
                        Dispute Resolution.
                    </p>
                </section>

                <section class="mb-14">
                    <h2 class="text-xl md:text-2xl font-extrabold text-slate-950 tracking-tight mb-4">16. Assignment</h2>
                    <p class="text-lg leading-relaxed">
                        This Agreement and the rights and obligations herein are personal to you, and you may not assign or
                        transfer them without our prior written consent. We may assign our rights and obligations under this
                        Agreement to any third party at our sole discretion, including in connection with a merger,
                        acquisition, or sale of assets. Any attempt by you to assign your rights without consent will be
                        null and void. This Agreement will be binding upon and inure to the benefit of the parties and their
                        respective successors and permitted assigns, ensuring continuity of service during business
                        transitions.
                    </p>
                </section>

                <section class="mb-14">
                    <h2 class="text-xl md:text-2xl font-extrabold text-slate-950 tracking-tight mb-4">17. Severability</h2>
                    <p class="text-lg leading-relaxed">
                        If any provision of this Agreement is held by a court of competent jurisdiction to be illegal,
                        unenforceable, or in conflict with any applicable law, the remaining provisions shall remain in full
                        force and effect. The parties agree to replace any such invalid provision with a valid provision
                        that most closely approximates the intent and economic effect of the invalid provision. This ensures
                        that the primary goals of the Agreement are maintained even if specific legal details are challenged
                        in court. Our failure to enforce any right or provision will not be considered a waiver of those
                        rights.
                    </p>
                </section>

                <section class="mb-14">
                    <h2 class="text-xl md:text-2xl font-extrabold text-slate-950 tracking-tight mb-4">18. Non-Waiver</h2>
                    <p class="text-lg leading-relaxed">
                        The failure of either party to exercise any right or remedy provided for in this Agreement shall not
                        be deemed a waiver of any further rights hereunder. No waiver of any term of this Agreement shall be
                        deemed a further or continuing waiver of such term or any other term. Any waiver must be in writing
                        and signed by an authorized representative of the waiving party to be valid. This ensures that both
                        parties are held accountable to the Agreement throughout the duration of the business relationship,
                        and that legal rights are preserved even if not immediately exercised.
                    </p>
                </section>

                <section class="mb-14">
                    <h2 class="text-xl md:text-2xl font-extrabold text-slate-950 tracking-tight mb-4">19. Force Majeure</h2>
                    <p class="text-lg leading-relaxed">
                        SmartAI Soft will not be liable for any failure to perform its obligations under this Agreement if
                        such failure is caused by an event beyond our reasonable control. This includes, but is not limited
                        to, acts of God, war, pandemic, government shutdown, lighting, flood, fire, or widespread
                        infrastructure failure. We will use commercially reasonable efforts to mitigate the effects of such
                        an event and will resume performance as soon as reasonably possible. We will not be held responsible
                        for service delays caused by these uncontrollable circumstances, ensuring that our business can
                        withstand global or local crises without legal penalty.
                    </p>
                </section>

                <section class="mb-14 border-t border-slate-100 pt-14">
                    <h2 class="text-xl md:text-2xl font-extrabold text-slate-950 tracking-tight mb-4">20. Entire Agreement
                    </h2>
                    <p class="text-lg leading-relaxed">
                        This Agreement constitutes the entire agreement between you and SmartAI Soft regarding your use of
                        the platform and Services, superseding all prior communications and proposals. No modification or
                        amendment of this Agreement will be binding unless in writing and signed by an authorized
                        representative of SmartAI Soft. You acknowledge that you have not relied on any representation or
                        warranty not expressly set forth in this Agreement. This ensures that the terms are clear, defined,
                        and centralized in this document for the benefit of both the company and the customer in any legal
                        or professional dispute.
                    </p>
                </section>

                <section class="pt-10 md:mt-20 pb-15 relative">
                    <div class="flex flex-col items-center mb-12 text-center" data-aos="fade-up">
                        <h2 class="text-3xl md:text-4xl font-extrabold text-slate-950 tracking-tight">Need a clarification?
                        </h2>
                        <p class="text-slate-500 mt-2 max-w-md italic">Our legal and support teams are available to help you
                            navigate our terms and ensure a transparent partnership.</p>
                    </div>

                    <div class="max-w-3xl mx-auto">
                        <div class="group relative p-8 md:p-12 rounded-2xl bg-[#020817] border border-white/5 overflow-hidden transition-all
                                 duration-500 hover:shadow-2xl hover:shadow-blue-500/10 hover:-translate-y-1">
                            <div class="absolute top-0 right-0 w-32 h-32 bg-[#f43f5e]/10 blur-3xl rounded-full -mr-16 -mt-16 group-hover:bg-[#f43f5e]/20
                                     transition-colors">
                            </div>
                            <div class="relative z-10 flex flex-col items-center text-center">
                                <h3 class="text-white text-xl md:text-2xl font-bold mb-4 italic tracking-tight opacity-70">
                                    Send an Inquiry</h3>
                                <a href="mailto:info@smartaisoft.com" class="text-[#f43f5e] font-extrabold text-2xl md:text-4xl hover:text-white transition-all
                                      underline underline-offset-8 decoration-2">
                                    info@smartaisoft.com
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true });
    </script>
@endsection