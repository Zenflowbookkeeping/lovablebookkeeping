import { Check } from "lucide-react";
import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { Button } from "@/components/ui/button";
import { Badge } from "@/components/ui/badge";

const plans = [
  {
    name: "Essential",
    tagline: "Stress free books done right every month",
    originalPrice: "$350",
    price: "$200 to $300",
    period: "per month",
    features: [
      "Monthly bank and card reconciliation",
      "Expense categorization with bank rules",
      "Monthly financial statements",
    ],
    bestFor: "Best for freelancers and solo service owners under 100k revenue",
    note: "Upgrades available at checkout",
    popular: false,
  },
  {
    name: "Professional",
    tagline: "Clarity every month so you can grow with confidence",
    originalPrice: "$600",
    price: "$300 to $450",
    period: "per month",
    features: [
      "Everything in Essential",
      "Light AR and AP tracking",
      "Quarterly performance insights summary",
      "Priority support",
    ],
    bestFor: "Best for growing businesses 100k to 500k or multiple accounts",
    note: "Upgrades available at checkout",
    popular: true,
  },
  {
    name: "Premium",
    tagline: "Advanced reporting and hands on support",
    originalPrice: "$900",
    price: "$450 to $750",
    period: "per month",
    features: [
      "Everything in Professional",
      "Custom reports and KPI dashboard",
      "Accrual reporting, payroll and loan tracking",
      "Monthly Loom walkthrough of results",
      "CPA coordination for tax ready handoffs",
    ],
    bestFor: "Best for established businesses over 500k or multi entity",
    note: "Limited capacity pricing in effect",
    popular: false,
  },
];

export function Pricing() {
  return (
    <section id="pricing" className="py-20 bg-background">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="text-center mb-8">
          <h2 className="text-3xl md:text-4xl font-bold text-foreground mb-4">
            Pricing
          </h2>
          <p className="text-muted-foreground max-w-3xl mx-auto text-lg">
            Transparent pricing. No contracts. First month satisfaction guarantee or you do not pay.
          </p>
        </div>

        <div className="bg-secondary rounded-2xl p-6 md:p-8 mb-12 max-w-4xl mx-auto">
          <p className="text-center text-foreground">
            Most small businesses waste <strong>$10,000+ per year</strong> in missed deductions, sloppy bookkeeping, or
            late tax prep. Our monthly bookkeeping packages start at just <strong>$200</strong> — less than the cost of one
            mistake.
          </p>
          <p className="text-center text-primary font-semibold mt-4">
            100% satisfaction in month one or pay nothing
          </p>
        </div>

        <div className="grid md:grid-cols-3 gap-8 mb-12">
          {plans.map((plan, index) => (
            <Card
              key={plan.name}
              className={`relative bg-card border-0 card-shadow hover-lift ${
                plan.popular ? "ring-2 ring-primary" : ""
              }`}
            >
              {plan.popular && (
                <Badge className="absolute -top-3 left-1/2 -translate-x-1/2 bg-primary text-primary-foreground">
                  Most popular
                </Badge>
              )}
              <CardHeader className="text-center pb-2">
                <CardTitle className="text-2xl font-bold text-primary">
                  {plan.name}
                </CardTitle>
                <p className="text-muted-foreground text-sm mt-1">
                  {plan.tagline}
                </p>
              </CardHeader>
              <CardContent className="space-y-6">
                <div className="text-center">
                  <p className="text-muted-foreground line-through text-sm">
                    Normally {plan.originalPrice}
                  </p>
                  <p className="text-2xl font-bold text-foreground">
                    {plan.price}
                  </p>
                  <p className="text-muted-foreground text-sm">{plan.period}</p>
                </div>

                <ul className="space-y-3">
                  {plan.features.map((feature, i) => (
                    <li key={i} className="flex items-start gap-2 text-sm">
                      <Check className="w-4 h-4 text-primary mt-0.5 flex-shrink-0" />
                      <span className="text-foreground">{feature}</span>
                    </li>
                  ))}
                </ul>

                <div className="pt-4 border-t">
                  <p className="text-xs text-muted-foreground text-center">
                    {plan.bestFor}
                  </p>
                  <p className="text-xs text-primary text-center mt-2 font-medium">
                    {plan.note}
                  </p>
                </div>

                <Button className="w-full bg-primary text-primary-foreground hover:bg-primary/90">
                  Get Started
                </Button>
              </CardContent>
            </Card>
          ))}
        </div>

        <div className="text-center space-y-4 max-w-3xl mx-auto">
          <p className="text-foreground">
            <strong>Not ready for full service?</strong> Quarterly bookkeeping is available at{" "}
            <strong>75% of the monthly rate</strong>. Perfect if your business doesn't need monthly reports but you still want everything fully updated and reconciled each quarter.
          </p>
          <p className="text-sm text-muted-foreground">
            Pricing shown reflects current founders pricing. Final quote depends on
            account volume and complexity. Cancel any time.
          </p>
        </div>
      </div>
    </section>
  );
}
