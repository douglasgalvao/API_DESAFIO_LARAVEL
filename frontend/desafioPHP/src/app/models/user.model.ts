export class UserModel {
  id!: number;
  name: string;
  email: string;
  email_verified_at?: Date;
  created_at: Date;
  updated_at: Date;
  constructor() {
    this.name = "";
    this.email = "";
    this.created_at = new Date();
    this.updated_at = new Date();
  }
}
