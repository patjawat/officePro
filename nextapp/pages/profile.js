import Link from "next/link";
import MyLayout from "../layouts/MyLayout";

export default function Profile() {
  return (
    <div>
      <p>This is the Profile page.</p>
      <p>
        <Link href="/account">
          <a>Go: Account</a>
        </Link>
      </p>
    </div>
  );
}

Profile.Layout = MyLayout;