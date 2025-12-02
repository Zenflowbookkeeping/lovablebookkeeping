import { Button } from "@/components/ui/button";
import jakePortrait from "@/assets/jake-portrait.png";

export function About() {
  return (
    <section id="about" className="py-20 bg-background">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid lg:grid-cols-2 gap-12 items-center">
          <div className="order-2 lg:order-1">
            <h2 className="text-3xl md:text-4xl font-bold text-foreground mb-2">
              About Me
            </h2>
            <h3 className="text-2xl md:text-3xl font-bold text-primary mb-6">
              Welcome to Wenonah Bookkeeping!
            </h3>
            <p className="text-muted-foreground text-lg leading-relaxed mb-8">
              I started Wenonah Bookkeeping after years in public accounting because I saw small business owners drowning in messy books, bad communication, and unclear financials. My goal is simple — give you clean numbers, clear answers, and more time to run your business.
            </p>
            <Button
              variant="outline"
              className="border-primary text-primary hover:bg-primary hover:text-primary-foreground"
            >
              Read More
            </Button>
          </div>
          <div className="order-1 lg:order-2 flex justify-center">
            <div className="w-64 h-72 md:w-80 md:h-96 rounded-3xl overflow-hidden card-shadow">
              <img
                src={jakePortrait}
                alt="Jake Demi"
                className="w-full h-full object-cover object-top"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
