
import React from 'react';
import { Facebook, Twitter, Instagram, Linkedin, Youtube } from 'lucide-react';

const Footer = () => {
  return (
    <footer className="bg-white border-t border-gray-100">
      <div className="container mx-auto px-4 md:px-6">
        {/* Main Footer */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 py-12">
          {/* Company Info */}
          <div className="lg:col-span-2">
            <a href="#" className="flex items-center gap-2 mb-4">
              <div className="h-8 w-8 rounded-full bg-Bloghub-600 flex items-center justify-center">
                <span className="text-white font-display font-bold text-lg">S</span>
              </div>
              <span className="font-display font-semibold text-xl text-gray-900">Bloghub</span>
            </a>
            <p className="text-gray-600 mb-6 max-w-sm">
              Bloghub helps teams collaborate seamlessly, automate repetitive tasks,
              and boost productivity with intuitive tools designed for modern workplaces.
            </p>
            <div className="flex space-x-4">
              <a href="#" className="text-gray-500 hover:text-Bloghub-600 transition-colors" aria-label="Facebook">
                <Facebook className="h-5 w-5" />
              </a>
              <a href="#" className="text-gray-500 hover:text-Bloghub-600 transition-colors" aria-label="Twitter">
                <Twitter className="h-5 w-5" />
              </a>
              <a href="#" className="text-gray-500 hover:text-Bloghub-600 transition-colors" aria-label="Instagram">
                <Instagram className="h-5 w-5" />
              </a>
              <a href="#" className="text-gray-500 hover:text-Bloghub-600 transition-colors" aria-label="LinkedIn">
                <Linkedin className="h-5 w-5" />
              </a>
              <a href="#" className="text-gray-500 hover:text-Bloghub-600 transition-colors" aria-label="YouTube">
                <Youtube className="h-5 w-5" />
              </a>
            </div>
          </div>

          {/* Links */}
          <div>
            <h3 className="font-semibold text-gray-900 mb-4">Product</h3>
            <ul className="space-y-3">
              <li><a href="#" className="text-gray-600 hover:text-Bloghub-600 transition-colors">Features</a></li>
              <li><a href="#" className="text-gray-600 hover:text-Bloghub-600 transition-colors">Pricing</a></li>
              <li><a href="#" className="text-gray-600 hover:text-Bloghub-600 transition-colors">Integrations</a></li>
              <li><a href="#" className="text-gray-600 hover:text-Bloghub-600 transition-colors">Changelog</a></li>
              <li><a href="#" className="text-gray-600 hover:text-Bloghub-600 transition-colors">Documentation</a></li>
            </ul>
          </div>

          <div>
            <h3 className="font-semibold text-gray-900 mb-4">Company</h3>
            <ul className="space-y-3">
              <li><a href="#" className="text-gray-600 hover:text-Bloghub-600 transition-colors">About Us</a></li>
              <li><a href="#" className="text-gray-600 hover:text-Bloghub-600 transition-colors">Blog</a></li>
              <li><a href="#" className="text-gray-600 hover:text-Bloghub-600 transition-colors">Careers</a></li>
              <li><a href="#" className="text-gray-600 hover:text-Bloghub-600 transition-colors">Customers</a></li>
              <li><a href="#" className="text-gray-600 hover:text-Bloghub-600 transition-colors">Press</a></li>
            </ul>
          </div>

          <div>
            <h3 className="font-semibold text-gray-900 mb-4">Resources</h3>
            <ul className="space-y-3">
              <li><a href="#" className="text-gray-600 hover:text-Bloghub-600 transition-colors">Help Center</a></li>
              <li><a href="#" className="text-gray-600 hover:text-Bloghub-600 transition-colors">Contact Us</a></li>
              <li><a href="#" className="text-gray-600 hover:text-Bloghub-600 transition-colors">Privacy Policy</a></li>
              <li><a href="#" className="text-gray-600 hover:text-Bloghub-600 transition-colors">Terms of Service</a></li>
              <li><a href="#" className="text-gray-600 hover:text-Bloghub-600 transition-colors">Status</a></li>
            </ul>
          </div>
        </div>

        {/* Bottom Footer */}
        <div className="border-t border-gray-100 py-6 flex flex-col md:flex-row justify-between items-center">
          <p className="text-gray-500 text-sm mb-4 md:mb-0">
            &copy; {new Date().getFullYear()} Bloghub. All rights reserved.
          </p>
          <div className="flex space-x-6">
            <a href="#" className="text-sm text-gray-500 hover:text-Bloghub-600 transition-colors">Privacy Policy</a>
            <a href="#" className="text-sm text-gray-500 hover:text-Bloghub-600 transition-colors">Terms of Service</a>
            <a href="#" className="text-sm text-gray-500 hover:text-Bloghub-600 transition-colors">Cookie Policy</a>
          </div>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
