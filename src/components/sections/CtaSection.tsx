
import React from 'react';
import { ArrowRight } from 'lucide-react';

const CtaSection = () => {
  return (
    <section className="py-20 bg-Bloghub-600 relative overflow-hidden">
      {/* Background Elements */}
      <div className="absolute top-0 right-0 w-1/3 h-full bg-Bloghub-500 opacity-30 rounded-l-full blur-3xl -z-10"></div>
      <div className="absolute bottom-0 left-0 w-1/4 h-3/4 bg-Bloghub-700 opacity-20 rounded-tr-full blur-3xl -z-10"></div>

      <div className="container mx-auto px-4 md:px-6">
        <div className="max-w-4xl mx-auto text-center">
          <h2 className="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-white mb-6 animate-fade-in">
            Ready to Bloghub Your Workflow?
          </h2>
          <p className="text-xl text-Bloghub-100 mb-8 max-w-2xl mx-auto animate-fade-in [animation-delay:200ms] text-balance">
            Join thousands of teams who have already transformed their productivity with Bloghub.
            Start your free 14-day trial today.
          </p>
          <div className="flex flex-col sm:flex-row justify-center gap-4 animate-fade-in [animation-delay:400ms]">
            <a
              href="#"
              className="bg-white text-Bloghub-600 px-6 py-3 rounded-full font-medium hover:bg-gray-100 transition-colors shadow-sm"
            >
              Start Free Trial
              <ArrowRight className="ml-2 inline-block h-4 w-4" />
            </a>
            <a
              href="#"
              className="text-white border border-white/30 hover:bg-white/10 px-6 py-3 rounded-full font-medium transition-colors"
            >
              Schedule a Demo
            </a>
          </div>
          <p className="text-Bloghub-100 mt-6 text-sm animate-fade-in [animation-delay:600ms]">
            No credit card required. Cancel anytime.
          </p>
        </div>
      </div>
    </section>
  );
};

export default CtaSection;
