import React from "react";

export default function Footer() {
  return (
    <footer className="py-4 container border-t mt-20">
      <p className="text-sm text-gray-400 text-center">
        &copy; {new Date().getFullYear()} Amit Raj Anand. All rights reserved.
      </p>
    </footer>
  );
}
