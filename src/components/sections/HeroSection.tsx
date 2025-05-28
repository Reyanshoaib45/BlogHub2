
import React from 'react';
import { ArrowRight } from 'lucide-react';

const HeroSection = () => {
  return (
    <section className="relative pt-32 pb-16 md:pt-40 md:pb-24 overflow-hidden">
      {/* Background Elements */}
      <div className="absolute inset-0 bg-hero-pattern -z-10"></div>
      <div className="absolute top-1/4 -left-24 w-64 h-64 bg-Bloghub-100 rounded-full blur-3xl opacity-60 -z-10"></div>
      <div className="absolute bottom-1/3 -right-32 w-80 h-80 bg-Bloghub-50 rounded-full blur-3xl opacity-70 -z-10"></div>

      <div className="container mx-auto px-4 md:px-6">
        <div className="max-w-screen-lg mx-auto text-center">
          {/* Pill Badge */}
          <div className="inline-flex items-center px-3 py-1 rounded-full bg-Bloghub-100 text-Bloghub-800 font-medium text-sm mb-6 animate-fade-in">
            <span className="inline-block w-2 h-2 rounded-full bg-Bloghub-500 mr-2"></span>
            Introducing Bloghub 2.0
          </div>

          {/* Headline */}
          <h1 className="text-4xl md:text-5xl lg:text-6xl font-display font-bold tracking-tight text-gray-900 mb-6 animate-fade-in [animation-delay:200ms]">
            Simplify Your Workflow<br className="hidden sm:block" />
            <span className="text-Bloghub-600">Work Smarter</span>, Not Harder
          </h1>

          {/* Subheadline */}
          <p className="text-xl text-gray-600 max-w-2xl mx-auto mb-8 md:mb-10 animate-fade-in [animation-delay:400ms] text-balance">
            Bloghub helps teams collaborate seamlessly, automate repetitive tasks,
            and boost productivity with intuitive tools designed for modern workplaces.
          </p>

          {/* CTA Buttons */}
          <div className="flex flex-col sm:flex-row items-center justify-center gap-4 mb-12 md:mb-16 animate-fade-in [animation-delay:600ms]">
            <a href="#" className="btn-primary w-full sm:w-auto">
              Start Free Trial
              <ArrowRight className="ml-2 h-4 w-4" />
            </a>
            <a href="#" className="btn-outline w-full sm:w-auto">
              See How It Works
            </a>
          </div>

          {/* Hero Image */}
          <div className="relative mx-auto max-w-4xl rounded-xl overflow-hidden shadow-xl border border-gray-200 animate-scale-in">
            <div className="absolute inset-0 bg-gradient-to-t from-black/10 to-transparent pointer-events-none"></div>
            <img
              src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d"
              alt="Bloghub dashboard"
              className="w-full h-auto"
              loading="lazy"
            />
          </div>

          {/* Stats or social proof */}
          <div className="mt-12 grid grid-cols-2 md:grid-cols-3 gap-6 max-w-3xl mx-auto animate-fade-in [animation-delay:800ms]">
            <div className="text-center">
              <p className="text-3xl font-display font-bold text-Bloghub-700">10k+</p>
              <p className="text-gray-500 text-sm">Active Users</p>
            </div>
            <div className="text-center">
              <p className="text-3xl font-display font-bold text-Bloghub-700">99.9%</p>
              <p className="text-gray-500 text-sm">Uptime</p>
            </div>
            <div className="text-center col-span-2 md:col-span-1">
              <p className="text-3xl font-display font-bold text-Bloghub-700">4.9/5</p>
              <p className="text-gray-500 text-sm">Customer Rating</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default HeroSection;
