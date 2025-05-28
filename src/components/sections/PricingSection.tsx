
import React, { useState } from 'react';
import { Check, HelpCircle } from 'lucide-react';

const PricingSection = () => {
  const [isAnnual, setIsAnnual] = useState(true);

  return (
    <section id="pricing" className="section-padding bg-white">
      <div className="container mx-auto px-4 md:px-6">
        {/* Section Header */}
        <div className="text-center max-w-3xl mx-auto mb-12 animate-fade-in">
          <h2 className="text-3xl md:text-4xl font-display font-bold text-gray-900 mb-4">
            Simple, Transparent Pricing
          </h2>
          <p className="text-xl text-gray-600 text-balance mb-8">
            Choose a plan that works best for you and your team.
            All plans include a 14-day free trial.
          </p>

          {/* Billing Toggle */}
          <div className="flex items-center justify-center mb-8">
            <span className={`text-sm ${!isAnnual ? 'text-gray-900 font-medium' : 'text-gray-500'}`}>
              Monthly
            </span>
            <button
              className="relative mx-4 h-6 w-12 rounded-full bg-Bloghub-100"
              onClick={() => setIsAnnual(!isAnnual)}
              aria-label={isAnnual ? "Switch to monthly billing" : "Switch to annual billing"}
            >
              <span
                className={`absolute top-1 left-1 h-4 w-4 rounded-full bg-Bloghub-600 transition-transform ${
                  isAnnual ? 'translate-x-6' : 'translate-x-0'
                }`}
              />
            </button>
            <span className={`text-sm ${isAnnual ? 'text-gray-900 font-medium' : 'text-gray-500'}`}>
              Annual <span className="text-Bloghub-600 font-medium ml-1">Save 20%</span>
            </span>
          </div>
        </div>

        {/* Pricing Cards */}
        <div className="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
          {/* Starter Plan */}
          <div className="bg-white rounded-2xl shadow-subtle border border-gray-200 overflow-hidden transition-all hover:shadow-md animate-fade-in [animation-delay:200ms]">
            <div className="p-6 border-b border-gray-100">
              <h3 className="text-xl font-semibold text-gray-900 mb-2">Starter</h3>
              <p className="text-gray-600 text-sm mb-4">Perfect for individuals and small projects</p>
              <div className="mb-4">
                <span className="text-4xl font-display font-bold text-gray-900">${isAnnual ? '12' : '15'}</span>
                <span className="text-gray-600 ml-1">/month</span>
                {isAnnual && <p className="text-sm text-Bloghub-600">Billed annually</p>}
              </div>
              <a href="#" className="btn-outline w-full">Get Started</a>
            </div>
            <div className="p-6">
              <ul className="space-y-3">
                {[
                  "Up to 3 Projects",
                  "Basic Analytics",
                  "24/7 Support",
                  "1 Team Member",
                  "5GB Storage"
                ].map((feature, i) => (
                  <li key={i} className="flex items-start text-gray-600">
                    <Check className="h-5 w-5 text-Bloghub-600 mr-3 flex-shrink-0 mt-0.5" />
                    <span>{feature}</span>
                  </li>
                ))}
              </ul>
            </div>
          </div>

          {/* Pro Plan - Highlighted */}
          <div className="bg-white rounded-2xl shadow-highlight border border-Bloghub-200 overflow-hidden transition-all relative transform hover:-translate-y-1 animate-fade-in [animation-delay:400ms]">
            <div className="absolute top-0 inset-x-0 h-1.5 bg-Bloghub-600 rounded-t-full"></div>
            <div className="absolute -top-4 inset-x-0 flex justify-center">
              <span className="bg-Bloghub-600 text-white text-xs font-semibold py-1 px-3 rounded-full">Most Popular</span>
            </div>
            <div className="p-8 border-b border-gray-100">
              <h3 className="text-xl font-semibold text-gray-900 mb-2">Pro</h3>
              <p className="text-gray-600 text-sm mb-4">Ideal for growing teams and businesses</p>
              <div className="mb-4">
                <span className="text-4xl font-display font-bold text-gray-900">${isAnnual ? '29' : '39'}</span>
                <span className="text-gray-600 ml-1">/month</span>
                {isAnnual && <p className="text-sm text-Bloghub-600">Billed annually</p>}
              </div>
              <a href="#" className="btn-primary w-full">Get Started</a>
            </div>
            <div className="p-8">
              <ul className="space-y-3">
                {[
                  "Unlimited Projects",
                  "Advanced Analytics",
                  "Priority Support",
                  "Up to 10 Team Members",
                  "50GB Storage",
                  "Custom Integrations",
                  "AI Automation"
                ].map((feature, i) => (
                  <li key={i} className="flex items-start text-gray-600">
                    <Check className="h-5 w-5 text-Bloghub-600 mr-3 flex-shrink-0 mt-0.5" />
                    <span>{feature}</span>
                  </li>
                ))}
              </ul>
            </div>
          </div>

          {/* Enterprise Plan */}
          <div className="bg-white rounded-2xl shadow-subtle border border-gray-200 overflow-hidden transition-all hover:shadow-md animate-fade-in [animation-delay:600ms]">
            <div className="p-6 border-b border-gray-100">
              <h3 className="text-xl font-semibold text-gray-900 mb-2">Enterprise</h3>
              <p className="text-gray-600 text-sm mb-4">For large organizations with advanced needs</p>
              <div className="mb-4">
                <span className="text-4xl font-display font-bold text-gray-900">${isAnnual ? '79' : '99'}</span>
                <span className="text-gray-600 ml-1">/month</span>
                {isAnnual && <p className="text-sm text-Bloghub-600">Billed annually</p>}
              </div>
              <a href="#" className="btn-outline w-full">Contact Sales</a>
            </div>
            <div className="p-6">
              <ul className="space-y-3">
                {[
                  "Unlimited Everything",
                  "Custom Analytics",
                  "Dedicated Support",
                  "Unlimited Team Members",
                  "500GB Storage",
                  "API Access",
                  "Advanced Security",
                  "Custom Onboarding"
                ].map((feature, i) => (
                  <li key={i} className="flex items-start text-gray-600">
                    <Check className="h-5 w-5 text-Bloghub-600 mr-3 flex-shrink-0 mt-0.5" />
                    <span>{feature}</span>
                  </li>
                ))}
              </ul>
            </div>
          </div>
        </div>

        {/* FAQ Section */}
        <div className="mt-20 max-w-3xl mx-auto">
          <h3 className="text-2xl font-semibold text-center mb-8">Frequently Asked Questions</h3>
          <div className="space-y-6">
            {/* FAQ Item */}
            <div className="bg-gray-50 rounded-lg p-6">
              <h4 className="font-medium text-gray-900 mb-2 flex items-center">
                <HelpCircle className="h-5 w-5 text-Bloghub-500 mr-2" />
                Can I change plans later?
              </h4>
              <p className="text-gray-600">
                Yes, you can upgrade, downgrade, or cancel your plan at any time.
                If you upgrade, you'll be prorated for the remainder of your billing cycle.
                If you downgrade, your new plan will take effect at the next billing cycle.
              </p>
            </div>

            {/* FAQ Item */}
            <div className="bg-gray-50 rounded-lg p-6">
              <h4 className="font-medium text-gray-900 mb-2 flex items-center">
                <HelpCircle className="h-5 w-5 text-Bloghub-500 mr-2" />
                What payment methods do you accept?
              </h4>
              <p className="text-gray-600">
                We accept all major credit cards (Visa, Mastercard, American Express) and PayPal.
                For Enterprise plans, we also offer invoicing options with net-30 terms.
              </p>
            </div>

            {/* FAQ Item */}
            <div className="bg-gray-50 rounded-lg p-6">
              <h4 className="font-medium text-gray-900 mb-2 flex items-center">
                <HelpCircle className="h-5 w-5 text-Bloghub-500 mr-2" />
                Do you offer a discount for non-profits?
              </h4>
              <p className="text-gray-600">
                Yes, we offer special pricing for non-profit organizations, educational institutions,
                and open-source projects. Please contact our sales team for more information.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default PricingSection;
