
import React from 'react';
import { BarChart, Sparkles, Clock, Globe } from 'lucide-react';

const FeaturesSection = () => {
  return (
    <section id="features" className="section-padding bg-white">
      <div className="container mx-auto px-4 md:px-6">
        {/* Section Header */}
        <div className="text-center max-w-3xl mx-auto mb-16 animate-fade-in">
          <h2 className="text-3xl md:text-4xl font-display font-bold text-gray-900 mb-4">
            Powerful Features for Your Workflow
          </h2>
          <p className="text-xl text-gray-600 text-balance">
            Everything you need to Bloghub your processes, collaborate with your team,
            and take your productivity to the next level.
          </p>
        </div>

        {/* Features Grid */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          {/* Feature 1 */}
          <div className="feature-card group animate-fade-in [animation-delay:200ms]">
            <div className="h-12 w-12 rounded-lg bg-Bloghub-100 flex items-center justify-center mb-5 text-Bloghub-600 group-hover:bg-Bloghub-600 group-hover:text-white transition-colors duration-300">
              <BarChart className="h-6 w-6" />
            </div>
            <h3 className="text-xl font-semibold text-gray-900 mb-3">Analytics Dashboard</h3>
            <p className="text-gray-600 mb-4">
              Get real-time insights and visual reports to track performance and make data-driven decisions.
            </p>
            <a href="#" className="text-Bloghub-600 font-medium text-sm flex items-center hover:text-Bloghub-700 transition-colors">
              Learn more
              <svg className="ml-1 w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 5l7 7-7 7" />
              </svg>
            </a>
          </div>

          {/* Feature 2 */}
          <div className="feature-card group animate-fade-in [animation-delay:400ms]">
            <div className="h-12 w-12 rounded-lg bg-Bloghub-100 flex items-center justify-center mb-5 text-Bloghub-600 group-hover:bg-Bloghub-600 group-hover:text-white transition-colors duration-300">
              <Sparkles className="h-6 w-6" />
            </div>
            <h3 className="text-xl font-semibold text-gray-900 mb-3">AI-Powered Automation</h3>
            <p className="text-gray-600 mb-4">
              Automate repetitive tasks and workflows with our intelligent AI assistant to save time and reduce errors.
            </p>
            <a href="#" className="text-Bloghub-600 font-medium text-sm flex items-center hover:text-Bloghub-700 transition-colors">
              Learn more
              <svg className="ml-1 w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 5l7 7-7 7" />
              </svg>
            </a>
          </div>

          {/* Feature 3 */}
          <div className="feature-card group animate-fade-in [animation-delay:600ms]">
            <div className="h-12 w-12 rounded-lg bg-Bloghub-100 flex items-center justify-center mb-5 text-Bloghub-600 group-hover:bg-Bloghub-600 group-hover:text-white transition-colors duration-300">
              <Clock className="h-6 w-6" />
            </div>
            <h3 className="text-xl font-semibold text-gray-900 mb-3">Time Tracking</h3>
            <p className="text-gray-600 mb-4">
              Track time spent on projects and tasks with precision, helping you bill accurately and manage resources effectively.
            </p>
            <a href="#" className="text-Bloghub-600 font-medium text-sm flex items-center hover:text-Bloghub-700 transition-colors">
              Learn more
              <svg className="ml-1 w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 5l7 7-7 7" />
              </svg>
            </a>
          </div>

          {/* Feature 4 */}
          <div className="feature-card group animate-fade-in [animation-delay:800ms]">
            <div className="h-12 w-12 rounded-lg bg-Bloghub-100 flex items-center justify-center mb-5 text-Bloghub-600 group-hover:bg-Bloghub-600 group-hover:text-white transition-colors duration-300">
              <Globe className="h-6 w-6" />
            </div>
            <h3 className="text-xl font-semibold text-gray-900 mb-3">Seamless Integration</h3>
            <p className="text-gray-600 mb-4">
              Connect with your favorite tools and apps for a unified workflow experience across your entire tech stack.
            </p>
            <a href="#" className="text-Bloghub-600 font-medium text-sm flex items-center hover:text-Bloghub-700 transition-colors">
              Learn more
              <svg className="ml-1 w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M9 5l7 7-7 7" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </section>
  );
};

export default FeaturesSection;
